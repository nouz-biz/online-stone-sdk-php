<?php

namespace SmartdataCo\OnlineStoneSdkPhp;

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

    /**
     * @param string $type | [TYPE_AUTHORIZE, TYPE_CANCELLATION, TYPE_COMPLETION_ADVICE, TYPE_TRANSACTION_STATUS_REPORT]
     */
    public function __construct(string $transaction_type)
    {
        $this->type = $transaction_type;
        $this->xml_options = array(
            'indent'     => '    ',
            'linebreak'  => "\n",
            'addDecl'    => true,
            'addDoctype' => true,
            'xmlns'      => 'urn:AcceptorAuthorisationRequestV02.1',
//            'doctype'    => array(
//                'uri' => 'http://pear.php.net/dtd/package-1.0',
//                'id' => '-//PHP//PEAR/DTD PACKAGE 0.1'
//            )
        );
    }


    public function toXML() {
        $serializer = new XML_Serializer($this->xml_options);

        return $serializer->serialize($this);
    }

}