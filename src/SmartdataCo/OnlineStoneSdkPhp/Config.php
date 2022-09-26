<?php

namespace SmartdataCo\OnlineStoneSdkPhp;

/**
 *
 * @package SmartdataCo\OnlineStoneSdkPhp
 */
class Config
{
    /**
     * SC Key
     * @var string
     */
    private string $sc;

    /**
     * SAK Key
     * @var string
     */
    private string $sak;

    private function __construct()
    {
        $this->sc = getenv('STONE_SC_KEY');
        $this->sak = getenv('STONE_SAK_KEY');
    }

    /**
     *
     * @return Config
     */
    public static function loadConfig(): Config
    {
        return new Config();
    }

    /**
     * @param string $sc
     * @param string $sak
     * @return Config
     */
    public static function init(string $sc, string $sak): Config
    {
        $config = new Config();
        $config->setSc($sc);
        $config->setSak($sak);
        return $config;
    }

    /**
     * @return string
     */
    public function getSc(): string
    {
        return $this->sc;
    }

    /**
     * @param string $sc
     * @return Config
     */
    public function setSc(string $sc): Config
    {
        $this->sc = $sc;
        return $this;
    }

    /**
     * @return string
     */
    public function getSak(): string
    {
        return $this->sak;
    }

    /**
     * @param string $sak
     * @return Config
     */
    public function setSak(string $sak): Config
    {
        $this->sak = $sak;
        return $this;
    }
}
