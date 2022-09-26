<?php

namespace SmartdataCo\OnlineStoneSdkPhp\RequestStructure;

use SmartdataCo\OnlineStoneSdkPhp\XMLDocument;

class AuthorisationOperation extends XMLDocument implements ITransactionType
{

    private Header $header;
    private AuthorisationRequest $request;

    public function __construct()
    {
        $this->tagName = 'AuthorisationRequest';
        $this->header = new Header();
        $this->header->setMsgFctn('AUTQ');
        $this->header->setPrtcolVrsn('2.0');
        $this->request = new AuthorisationRequest();
        $this->addChild($this->header);
        $this->addChild($this->request);
    }

    public function setMerchant(){}
    public function setCard(){}
    public function setInteractionPoint(){}

}
