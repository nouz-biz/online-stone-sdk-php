<?php

namespace SmartdataCo\OnlineStoneSdkPhp;

use PHPUnit\Framework\TestCase;

class EnvironmentTest extends TestCase
{

    /**
     * Test Production Env Config
     *
     * @return void
     */
    public function testProduction(): void
    {
        $this->assertIsObject(Environment::production());
        $this->assertInstanceOf(Environment::class, Environment::production());
    }

    /**
     * Test if the API Url is correctly bein set while changing envs
     * @return void
     */
    public function testGetApiUrl(): void
    {
        $this->assertEquals('https://e-commerce.stone.com.br', Environment::production()->getApiUrl());
        $this->assertEquals('https://sandbox-auth-integration.stone.com.br', Environment::homolog()->getApiUrl());
    }

    /**
     * Test Homolog Env Config
     *
     * @return void
     */
    public function testHomolog(): void
    {
        $this->assertIsObject(Environment::homolog());
        $this->assertInstanceOf(Environment::class, Environment::homolog());
    }
}
