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

use DateTime;
use Doctrine\Common\Collections\Collection;

/**
 * @author Matthew Fitzgerald <matthewfitz@gmail.com>
 */
interface ProductInterface
{
    /**
     * @return DateTime
     */
    public function getCreatedAt();

    /**
     * @param DateTime
     */
    public function setCreatedAt(DateTime $createdAt);

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @param string
     */
    public function setDescription($description);

    /**
     * @return int
     */
    public function getHeight();

    /**
     * @param int
     */
    public function setHeight($height);

    /**
     * @return string
     */
    public function getId();

    /**
     * @param string
     */
    public function setId($id);

    /**
     * @return Doctrine\Common\Collections\Collection
     */
    public function getImages();

    /**
     * @param Doctrine\Common\Collections\Collection
     */
    public function setImages(Collection $images);

    /**
     * @return int
     */
    public function getLength();

    /**
     * @param int
     */
    public function setLength($length);

    /**
     * @return DateTime
     */
    public function getPublishedAt();

    /**
     * @param DateTime
     */
    public function setPublishedAt(DateTime $publishedAt);

    /**
     * @return int
     */
    public function getQuantity();

    /**
     * @param int
     */
    public function setQuantity($quantity);

    /**
     * @return string
     */
    public function getSku();

    /**
     * @param string
     */
    public function setSku($sku);

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param string
     */
    public function setTitle($title);

    /**
     * @return DateTime
     */
    public function getUpdatedAt();

    /**
     * @param DateTime
     */
    public function setUpdatedAt(DateTime $updatedAt);

    /**
     * @return Doctrine\Common\Collections\Collection
     */
    public function getVariants();

    /**
     * @param Doctrine\Common\Collections\Collection
     */
    public function setVariants(Collection $variants);

    /**
     * @return int
     */
    public function getWeight();

    /**
     * @param int
     */
    public function setWeight($weight);

     /**
     * @return int
     */
    public function getWidth();

    /**
     * @param int
     */
    public function setWidth($width);
}
