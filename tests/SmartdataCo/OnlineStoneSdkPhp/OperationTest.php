<?php

namespace SmartdataCo\OnlineStoneSdkPhp;

use PHPUnit\Framework\TestCase;

class OperationTest extends TestCase
{
    public function testAuthorizeWithDelayedCapture()
    {
        $transaction = new Operation(Operation::TYPE_AUTHORIZE);
        var_dump($transaction->toXML());
        $this->fail();
    }

    public function testAuthorizeWithAutoCapture()
    {
        $this->fail();
    }

    public function testAuthorizeWithInstallments()
    {
        $this->fail();
    }

    public function testAuthorizeRecurring()
    {
        $this->fail();
    }

    public function testAuthorizeWithSubAcquiring()
    {
        $this->fail();
    }

    public function testAuthorizeWithZeroDolar()
    {
        $this->fail();
    }
}
