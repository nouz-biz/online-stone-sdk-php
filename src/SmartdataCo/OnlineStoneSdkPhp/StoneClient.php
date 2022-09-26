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
    public function __construct(Config $config = null, Environment $env = null)
    {
        if (is_null($env)) {
            $this->setEnvironment(Environment::production());
        } else {
            $this->setEnvironment($env);
        }

        // if null load config from Env Vars
        if (is_null(null)) {
            $this->config = Config::loadConfig();
        } else {
            $this->config = $config;
        }
    }

    /**
     * @param Environment $env
     * @return void
     */
    public function setEnvironment(Environment $env): void
    {
        $this->environment = $env;
    }
}
