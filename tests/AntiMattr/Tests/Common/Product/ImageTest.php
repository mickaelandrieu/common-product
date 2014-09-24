<?php

namespace AntiMattr\Tests\Common\Product;

use AntiMattr\Common\Product\Image;
use AntiMattr\TestCase\AntiMattrTestCase;

class ImageTest extends AntiMattrTestCase
{
    private $image;

    protected function setUp()
    {
        $this->image = new Image();
    }

    public function testConstructor()
    {
        $this->assertNull($this->image->getId());
        $this->assertNull($this->image->getPosition());
        $this->assertNull($this->image->getSource());
    }

    public function testSettersGetters()
    {
        $id = 'id';
        $this->image->setId($id);
        $this->assertEquals($id, $this->image->getId());

        $position = 1;
        $this->image->setPosition($position);
        $this->assertEquals($position, $this->image->getPosition());

        $source = 'http://example.com/product.jpg';
        $this->image->setSource($source);
        $this->assertEquals($source, $this->image->getSource());
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testSetPositionWithDecimalThrowsInvalidArgumentException()
    {
        $decimal = 100.00;
        $this->image->setPosition($decimal);
    }
}
