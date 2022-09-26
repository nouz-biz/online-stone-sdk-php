<?php
require('vendor/autoload.php');

use \SmartdataCo\OnlineStoneSdkPhp\StoneClient;
use \SmartdataCo\OnlineStoneSdkPhp\Operation;
use \SmartdataCo\OnlineStoneSdkPhp\Environment;
use \SmartdataCo\OnlineStoneSdkPhp\Config;

$card = new Card();
$card->setNumber("");
$card->setExpiricyDate("");
$card->setHolderName("");
$card->setSecurityCode("");

$merchant = new Merchant();
$merchant->setId("");
$merchant->setShortName("");

$operation = new Operation(Operation::TYPE_AUTHORIZE);
$operation->setCard($card);
$operation->setMerchant($merchant);


$config = Config::init("", "");

$stone = new StoneClient($config, Environment::homolog());
$stone->setOperation($operation);
$result = $stone->authorize();


