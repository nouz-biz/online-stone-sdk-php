<?php

namespace SmartdataCo\OnlineStoneSdkPhp\RequestStructure;

use SmartdataCo\OnlineStoneSdkPhp\XMLDocument;

class AuthorisationRequest extends XMLDocument implements ITransactionType
{

    public function __construct()
    {
        $this->tagName = 'AuthorisationRequest';
    }

}
