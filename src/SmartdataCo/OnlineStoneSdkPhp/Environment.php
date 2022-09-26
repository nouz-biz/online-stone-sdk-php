<?php

namespace SmartdataCo\OnlineStoneSdkPhp;

/**
 *
 * @package SmartdataCo\OnlineStoneSdkPhp
 */
class Environment
{

    /**
     * @var string
     */
    private $api;

    /**
     *
     * @param $api
     */
    private function __construct($api)
    {
        $this->api = $api;
    }

    /**
     *
     * @return Environment
     */
    public static function homolog() : Environment
    {
        return new Environment('https://sandbox-auth-integration.stone.com.br');
    }

    /**
     *
     * @return Environment
     */
    public static function production() : Environment
    {
        return new Environment('https://e-commerce.stone.com.br');
    }

    /**
     * Gets the environment's Api URL
     *
     * @return string the Api URL
     */
    public function getApiUrl(): string
    {
        return $this->api;
    }
}
