<?php

namespace SmartdataCo\OnlineStoneSdkPhp;

class XMLDocument
{
    /**
     * @var string
     */
    protected $tagName = "";

    /**
     * @var array|object
     */
    protected array|object $children = [];

    /**
     * @var array
     */
    public array $values = [];

    /**
     * @var array
     */
    protected array $attribs = [];

    /**
     * @param XMLDocument $child
     * @return void
     */
    public function addChild(XMLDocument $child): void
    {
        if ( is_object($this->children) ) {
            $this->children = [$this->children];
        }
        $this->children[] = $child;
    }

    /**
     * @return string
     */
    public function toXML(): string
    {
        $attrs = [];
        foreach ($this->attribs as $attrKey => $attrVal) {
            $attrs[] = "$attrKey='$attrVal'";
        }

        $values = [];
        foreach ($this->values as $valKey => $val) {
            $values[] = "<$valKey>$val</$valKey>";
        }

        $childDoc = '';
        if (is_subclass_of($this->children, 'SmartdataCo\OnlineStoneSdkPhp\XMLDocument')) {
            $childDoc .= $this->children->toXML();
        } else if (is_array($this->children) === true) {
            foreach ($this->children as $child) {
                $childDoc .= $child->toXML();
            }
        } else {
            $childDoc .= '';
        }

        return "<{$this->tagName} " . (implode(' ', $attrs)) . ">"
            . $childDoc
            . implode('', $values)
            . "</{$this->tagName}>";
    }
}
