<?php

namespace SmartdataCo\OnlineStoneSdkPhp\RequestStructure;

use SmartdataCo\OnlineStoneSdkPhp\XMLDocument;

class Document extends XMLDocument
{
    /**
     * @var string
     */
    protected $xmlns = 'urn:AcceptorAuthorisationRequestV02.1';

    /**
     *
     */
    public function __construct()
    {
        $this->tagName = "Document";
        $this->attribs['xmlns'] = $this->xmlns;
    }


    public function setTransactionOperation(ITransactionType $transaction)
    {
        $this->children = $transaction;
    }

}
