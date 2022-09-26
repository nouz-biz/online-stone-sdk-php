<?php

namespace SmartdataCo\OnlineStoneSdkPhp;

use SmartdataCo\OnlineStoneSdkPhp\Exceptions\StoneTransactionInvalidType;
use SmartdataCo\OnlineStoneSdkPhp\Exceptions\StoneXMLConvertionException;
use SmartdataCo\OnlineStoneSdkPhp\RequestStructure\AuthorisationOperation;
use SmartdataCo\OnlineStoneSdkPhp\RequestStructure\Document;

/**
 * @package SmartdataCo\OnlineStoneSdkPhp
 */
class Operation
{

    CONST TYPE_AUTHORIZE = 'Authorize';
    CONST TYPE_CANCELLATION = 'Cancellation';
    CONST TYPE_COMPLETION_ADVICE = 'CompletionAdvice';
    CONST TYPE_TRANSACTION_STATUS_REPORT = 'TransactionStatusReport';

    /**
     * @var string
     */
    protected string $type = '';

    /**
     * @var Document
     */
    protected Document $rootDocument;

    /**
     * @param string $transaction_type
     * @throws StoneTransactionInvalidType
     */
    public function __construct(string $transaction_type)
    {
        $this->type = $transaction_type;
        $this->rootDocument = new Document();
        switch ($this->type) {
            case $this->type === Operation::TYPE_AUTHORIZE:
                $this->rootDocument->setTransactionOperation(new AuthorisationOperation());
                break;
            case $this->type === Operation::TYPE_CANCELLATION:
                // TODO: implement
                break;
            case $this->type === Operation::TYPE_COMPLETION_ADVICE:
                // TODO: implement
                break;
            case $this->type === Operation::TYPE_TRANSACTION_STATUS_REPORT:
                // TODO: implement
                break;
            default:
                throw new StoneTransactionInvalidType();
        }
    }

    public function setMerchant(){}
    public function setCard(){}
    public function setInteractionPoint(){}

    /**
     *
     * @throws StoneXMLConvertionException
     * @return string|null
     */
    public function toXML() {
        return $this->rootDocument->toXML();
    }

}