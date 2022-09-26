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
    protected array $attribs = [];

    /**
     * @return string
     */
    public function toXML(): string
    {
        $attrs = [];
        foreach ($this->attribs as $attrKey => $attrVal) {
            $attrs[] = "$attrKey='$attrVal'";
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
            . "</{$this->tagName}>";
    }
}
