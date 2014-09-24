<?php

namespace AntiMattr\Tests\Common\Product;

use AntiMattr\Common\Product\Variant;
use AntiMattr\TestCase\AntiMattrTestCase;

class VariantTest extends AntiMattrTestCase
{
    private $variant;

    protected function setUp()
    {
        $this->variant = new Variant();
    }

    public function testConstructor()
    {
        $this->assertInstanceOf('AntiMattr\Common\Product\Product', $this->variant);
        $this->assertNull($this->variant->getImage());
        $this->assertNull($this->variant->getPosition());
        $this->assertNull($this->variant->getProduct());
    }

    public function testSettersGetters()
    {
        $product = $this->buildMock('AntiMattr\Common\Product\Product');
        $this->variant->setProduct($product);

        $this->assertEquals($product, $this->variant->getProduct());

        $image = $this->buildMock('AntiMattr\Common\Product\Image');
        $this->variant->setImage($image);

        $this->assertEquals($image, $this->variant->getImage());

        $position = 1;
        $this->variant->setPosition($position);
        $this->assertEquals($position, $this->variant->getPosition());
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testSetPositionWithDecimalThrowsInvalidArgumentException()
    {
        $decimal = 100.00;
        $this->variant->setPosition($decimal);
    }
}
