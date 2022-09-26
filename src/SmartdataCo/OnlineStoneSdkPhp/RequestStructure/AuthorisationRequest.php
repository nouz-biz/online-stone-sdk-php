<?php

namespace SmartdataCo\OnlineStoneSdkPhp\RequestStructure;

use SmartdataCo\OnlineStoneSdkPhp\XMLDocument;

class AuthorisationRequest extends XMLDocument
{

    public function __construct()
    {
        $this->tagName = 'AuthstnReq';
    }


    public function setMerchant(){}
    public function setCard(){}
    public function setInteractionPoint(){}

}