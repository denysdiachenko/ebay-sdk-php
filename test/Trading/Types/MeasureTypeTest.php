<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\Trading\Types;

use DTS\eBaySDK\Trading\Types\MeasureType;

class MeasureTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new MeasureType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\MeasureType', $this->obj);
    }

    public function testExtendsDecimalType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\DecimalType', $this->obj);
    }
}