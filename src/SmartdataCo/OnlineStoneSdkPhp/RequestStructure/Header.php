<?php

namespace SmartdataCo\OnlineStoneSdkPhp\RequestStructure;

use SmartdataCo\OnlineStoneSdkPhp\XMLDocument;

class Header extends XMLDocument
{

    /**
     * @var string
     */
    private string $MsgFctn = '';

    /**
     * @var string
     */
    private string $PrtcolVrsn = '';

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tagName = "Hdr";
    }

    public function setMsgFctn($value)
    {
        $this->values['MsgFctn'] = $value;
        $this->MsgFctn = $value;
    }

    public function setPrtcolVrsn($value)
    {
        $this->values['PrtcolVrsn'] = $value;
        $this->PrtcolVrsn = $value;
    }

    /**
     * @return string
     */
    public function getMsgFctn(): string
    {
        return $this->MsgFctn;
    }

    /**
     * @return string
     */
    public function getPrtcolVrsn(): string
    {
        return $this->PrtcolVrsn;
    }
}
