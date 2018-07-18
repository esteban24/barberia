<?php

/*
 * This file is part of the barberia-API package.
 *
 * (c) Esteban Martin <esteban.martin.busto@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @author Esteban Martin <esteban.martin.busto@gmail.com>
 *
 * @ORM\Entity
 */
class Customer
{
	/**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="boolean")
     */
    private $gender;

    /**
     * @return Integer
     */
    public function getId()
    {
    	return $this->id;
    }

    /**
     * @return String
     */
    public function getName()
    {
    	return $this->name;
    }

    /**
     * @param String
     */
    public function setName(String $name)
    {
    	$this->name = $name;
    }

    /**
     * @return Boolean
     */
    public function getGender()
    {
    	return $this->gender;
    }

    /**
     * @param Boolean
     */
    public function setGender($gender)
    {
    	$this->gender = $gender;
    }

    /**
     * @return string
     */
    public function __toString()
    {
    	return $this->name;
    }
}