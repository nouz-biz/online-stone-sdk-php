<?php

namespace SmartdataCo\OnlineStoneSdkPhp;

use SmartdataCo\OnlineStoneSdkPhp\Exceptions\StoneXMLConvertionException;
use SmartdataCo\OnlineStoneSdkPhp\RequestStructure\AuthorisationRequest;
use SmartdataCo\OnlineStoneSdkPhp\RequestStructure\Document;

/**
 * @package SmartdataCo\OnlineStoneSdkPhp
 */
class Transaction
{

    CONST TYPE_AUTHORIZE = 'Authorize';
    CONST TYPE_CANCELLATION = 'Cancellation';
    CONST TYPE_COMPLETION_ADVICE = 'CompletionAdvice';
    CONST TYPE_TRANSACTION_STATUS_REPORT = 'TransactionStatusReport';

    protected string $type = '';
    protected array $xml_options = [];

    protected Document $rootDocument;

    /**
     * @param string $transaction_type
     */
    public function __construct(string $transaction_type)
    {
        $this->type = $transaction_type;
        $this->xml_options = array(
            'indent'     => '   ',
            'linebreak'  => "\n",
            'addDecl'    => false,
            'addDoctype' => false,
            'scalarAsAttributes' => true,
//            'namespace' => ''
        );
        $this->rootDocument = new Document();
        $this->rootDocument->setTransactionOperation(new AuthorisationRequest());
    }

    /**
     *
     * @throws StoneXMLConvertionException
     * @return string|null
     */
    public function toXML() {
        return $this->rootDocument->toXML();
//        $serializer = new \XML_Serializer($this->xml_options);
//
//        if ( $serializer->serialize($this->rootDocument) )
//        {
////            return $serializer->getSerializedData();
//            return $this->rootDocument->toXML();
//        } else
//        {
//            throw new StoneXMLConvertionException();
//        }
    }

}