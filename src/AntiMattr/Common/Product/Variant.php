<?php

/*
 * This file is part of the AntiMattr Common Product Model, a library by Matthew Fitzgerald.
 *
 * (c) 2014 Matthew Fitzgerald
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AntiMattr\Common\Product;

use InvalidArgumentException;

/**
 * @author Matthew Fitzgerald <matthewfitz@gmail.com>
 */
class Variant extends Product
{
    /** @var AntiMattr\Common\Product\Image */
    protected $image;

    /** @var int */
    protected $position;

    /** @var AntiMattr\Common\Product\Product */
    protected $product;

    /**
     * @return AntiMattr\Common\Product\Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param AntiMattr\Common\Product\Image
     */
    public function setImage(Image $image)
    {
        $this->image = $image;
        if ($this->product && !$this->product->hasImage($image)) {
            $this->product->addImage($image);
        }
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param int
     *
     * @throws InvalidArgumentException
     */
    public function setPosition($position)
    {
        if (!is_int($position)) {
            throw new InvalidArgumentException('Variant::position must be an integer');
        }

        $this->position = $position;
    }

    /**
     * @return AntiMattr\Common\Product\Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param AntiMattr\Common\Product\Product
     */
    public function setProduct(Product $product)
    {
        $this->product = $product;
    }
}
