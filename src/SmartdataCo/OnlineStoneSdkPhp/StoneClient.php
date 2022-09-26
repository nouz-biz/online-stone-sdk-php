<?php

namespace SmartdataCo\OnlineStoneSdkPhp;

class StoneClient
{

    /**
     * @var Environment
     */
    private Environment $environment;

    /**
     * @var Config
     */
    private Config $config;

    /**
     * @param Config|null $config
     */
    private function __construct(Config $config = null)
    {
        // if null load config from Env Vars
        if (is_null(null)) {
            $this->config = Config::loadConfig();
        } else {
            $this->config = $config;
        }
    }
}
