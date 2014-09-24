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
class Image
{
    /** @var string */
    protected $id;

    /** @var int */
    protected $position;

    /** @var string */
    protected $source;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string
     */
    public function setId($id)
    {
        $this->id = $id;
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
            throw new InvalidArgumentException('Image::position must be an integer');
        }

        $this->position = $position;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string
     */
    public function setSource($source)
    {
        $this->source = $source;
    }
}
