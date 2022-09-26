<?php

namespace SmartdataCo\OnlineStoneSdkPhp;

use PHPUnit\Framework\TestCase;

class ConfigTest extends TestCase
{

    /**
     *
     * @return void
     */
    public function testInit()
    {
        $scVar = "SC_KEY_TEST";
        $sakVar = "SAK_KEY_TEST";
        $config = Config::init($scVar, $sakVar);
        $this->assertInstanceOf(Config::class, $config);
        $this->assertEquals("SC_KEY_TEST", $config->getSc());
        $this->assertEquals("SAK_KEY_TEST", $config->getSak());
    }

    /**
     * Test loading Env Var Config
     * @return void
     */
    public function testLoadConfig(): void
    {
        putenv("STONE_SC_KEY=SC_KEY_TEST");
        putenv("STONE_SAK_KEY=SAK_KEY_TEST");
        $config = Config::loadConfig();
        $this->assertInstanceOf(Config::class, $config);
        $this->assertEquals("SC_KEY_TEST", $config->getSc());
        $this->assertEquals("SAK_KEY_TEST", $config->getSak());
    }
}
