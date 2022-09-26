<?php

namespace SmartdataCo\OnlineStoneSdkPhp;

use PHPUnit\Framework\TestCase;

class testXMLDocumentSimple extends XMLDocument
{

    public function __construct()
    {
        $this->tagName = "testTagSimple";
    }

}

class testXMLDocumentWithAttribsWoChild extends XMLDocument
{

    public function __construct()
    {
        $this->tagName = "testTagWAttrWoChild";
        $this->attribs = ['int'=>1, 'str'=>'string', 'bool'=>true];
    }

}

class testXMLDocumentWithAttribsWithSingleChildren extends XMLDocument
{

    public function __construct()
    {
        $this->tagName = "testTagWAttrWSChild";
        $this->attribs = ['int'=>1, 'str'=>'string', 'bool'=>true];
        $this->children = new testXMLDocumentSimple();
    }

}

class testXMLDocumentWithAttribsWithMultiChildren extends XMLDocument
{

    public function __construct()
    {
        $this->tagName = "testTagWAttrWMChild";
        $this->attribs = ['int'=>1, 'str'=>'string', 'bool'=>true];
        $this->children = [new testXMLDocumentSimple(), new testXMLDocumentWithAttribsWoChild()];
    }

}

class XMLDocumentTest extends TestCase
{

    public function testToXMLDocumentSimple()
    {
        $xmlDoc = new testXMLDocumentSimple();
        $output = $xmlDoc->toXML();
        $this->assertStringContainsString("testTagSimple", $output);

    }

    public function testToXMLDocumentWithAttribsWoChild()
    {
        $xmlDoc = new testXMLDocumentWithAttribsWoChild();
        $output = $xmlDoc->toXML();
        $this->assertStringContainsString("testTagWAttrWoChild", $output);
        $this->assertStringContainsString("int='1'", $output);
        $this->assertStringContainsString("str='string'", $output);
        $this->assertStringContainsString("bool='1'", $output);

    }

    public function testToXMLDocumentWithAttribsWithSingleChildren()
    {
        $xmlDoc = new testXMLDocumentWithAttribsWithSingleChildren();
        $output = $xmlDoc->toXML();
        $this->assertStringContainsString("testTagWAttrWSChild", $output);
        $this->assertStringContainsString("int='1'", $output);
        $this->assertStringContainsString("str='string'", $output);
        $this->assertStringContainsString("bool='1'", $output);
        $this->assertStringContainsString("testTagSimple", $output);

    }

    public function testToXMLDocumentWithAttribsWithMultiChildren()
    {
        $xmlDoc = new testXMLDocumentWithAttribsWithMultiChildren();
        $output = $xmlDoc->toXML();
        $this->assertStringContainsString("testTagWAttrWMChild", $output);
        $this->assertStringContainsString("int='1'", $output);
        $this->assertStringContainsString("str='string'", $output);
        $this->assertStringContainsString("bool='1'", $output);
        $this->assertStringContainsString("testTagSimple", $output);
        $this->assertStringContainsString("testTagWAttrWoChild", $output);

    }


}
