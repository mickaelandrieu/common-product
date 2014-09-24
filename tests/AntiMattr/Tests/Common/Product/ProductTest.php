<?php

namespace AntiMattr\Tests\Common\Product;

use AntiMattr\Common\Product\Product;
use AntiMattr\TestCase\AntiMattrTestCase;

class ProductTest extends AntiMattrTestCase
{
    private $product;

    protected function setUp()
    {
        $this->product = new Product();
    }

    public function testConstructor()
    {
        $this->assertInstanceOf('AntiMattr\Common\Product\ProductInterface', $this->product);
        $this->assertNull($this->product->getCreatedAt());
        $this->assertNull($this->product->getCurrency());
        $this->assertNull($this->product->getDescription());
        $this->assertNull($this->product->getHeight());
        $this->assertNull($this->product->getId());
        $this->assertNotNull($this->product->getImages());
        $this->assertNull($this->product->getLength());
        $this->assertNull($this->product->getPrice());
        $this->assertNull($this->product->getPublishedAt());
        $this->assertNull($this->product->getQuantity());
        $this->assertNull($this->product->getSku());
        $this->assertNull($this->product->getStatus());
        $this->assertNull($this->product->getTitle());
        $this->assertNull($this->product->getUpdatedAt());
        $this->assertNotNull($this->product->getVariants());
        $this->assertNull($this->product->getWeight());
        $this->assertNull($this->product->getWidth());
    }

    public function testSettersGetters()
    {
        $createdAt = $this->createDateTime();
        $this->product->setCreatedAt($createdAt);
        $this->assertEquals($createdAt, $this->product->getCreatedAt());

        $currency = 'USD';
        $this->product->setCurrency($currency);
        $this->assertEquals($currency, $this->product->getCurrency());

        $description = 'description';
        $this->product->setDescription($description);
        $this->assertEquals($description, $this->product->getDescription());

        $height = 2;
        $this->product->setHeight($height);
        $this->assertEquals($height, $this->product->getHeight());

        $id = 'id';
        $this->product->setId($id);
        $this->assertEquals($id, $this->product->getId());

        $images = $this->getMock('Doctrine\Common\Collections\Collection');
        $this->product->setImages($images);
        $this->assertEquals($images, $this->product->getImages());

        $image = $this->buildMock('AntiMattr\Common\Product\Image');
        $images->expects($this->once())
            ->method('contains')
            ->with($image)
            ->will($this->returnValue(true));
        $this->assertTrue($this->product->hasImage($image));

        $length = 3;
        $this->product->setLength($length);
        $this->assertEquals($length, $this->product->getLength());

        $price = 100;
        $this->product->setPrice($price);
        $this->assertEquals($price, $this->product->getPrice());

        $publishedAt = $this->createDateTime();
        $this->product->setPublishedAt($publishedAt);
        $this->assertEquals($publishedAt, $this->product->getPublishedAt());

        $quantity = 10;
        $this->product->setQuantity($quantity);
        $this->assertEquals($quantity, $this->product->getQuantity());

        $sku = 'sku';
        $this->product->setSku($sku);
        $this->assertEquals($sku, $this->product->getSku());

        $status = 'status';
        $this->product->setStatus($status);
        $this->assertEquals($status, $this->product->getStatus());

        $title = 'title';
        $this->product->setTitle($title);
        $this->assertEquals($title, $this->product->getTitle());

        $updatedAt = $this->createDateTime();
        $this->product->setUpdatedAt($updatedAt);
        $this->assertEquals($updatedAt, $this->product->getUpdatedAt());

        $variants = $this->getMock('Doctrine\Common\Collections\Collection');
        $this->product->setVariants($variants);
        $this->assertEquals($variants, $this->product->getVariants());

        $variant = $this->buildMock('AntiMattr\Common\Product\Variant');
        $variants->expects($this->once())
            ->method('contains')
            ->with($variant)
            ->will($this->returnValue(true));
        $this->assertTrue($this->product->hasVariant($variant));

        $variant2 = $this->buildMock('AntiMattr\Common\Product\Variant');

        $variant2->expects($this->once())
            ->method('getProduct')
            ->will($this->returnValue(null));

        $variant2->expects($this->once())
            ->method('setProduct')
            ->with($this->product);

        $this->product->addVariant($variant2);

        $weight = 4;
        $this->product->setWeight($weight);
        $this->assertEquals($weight, $this->product->getWeight());

        $width = 5;
        $this->product->setWidth($width);
        $this->assertEquals($width, $this->product->getWidth());
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testSetPriceWithDecimalThrowsInvalidArgumentException()
    {
        $decimal = 100.00;
        $this->product->setPrice($decimal);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testSetHeightWithDecimalThrowsInvalidArgumentException()
    {
        $decimal = 100.00;
        $this->product->setHeight($decimal);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testSetLengthWithDecimalThrowsInvalidArgumentException()
    {
        $decimal = 100.00;
        $this->product->setLength($decimal);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testSetQuantityWithDecimalThrowsInvalidArgumentException()
    {
        $decimal = 100.00;
        $this->product->setQuantity($decimal);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testSetWeightWithDecimalThrowsInvalidArgumentException()
    {
        $decimal = 100.00;
        $this->product->setWeight($decimal);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testSetWidthWithDecimalThrowsInvalidArgumentException()
    {
        $decimal = 100.00;
        $this->product->setWidth($decimal);
    }
}
