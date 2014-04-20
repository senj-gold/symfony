<?php

namespace ITDoors\OperBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
*
* @ORM\Entity
*/
class Department
{
    /**
     * @var integer $id
     *
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="City", inversedBy="posts")
     * @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     */
    public $city_id;
    /**
     * @ORM\ManyToOne(targetEntity="Organization", inversedBy="posts")
     * @ORM\JoinColumn(name="organization_id", referencedColumnName="id")
     */
    public $organization_id;

    /**
     * @var string $mpk
     * @ORM\Column(name="mpk", type="string", length=20)
     */
    public $mpk;
    
    /**
     * @var string $name
     * @ORM\Column(name="name", type="string", length=20)
     */
    public $name;
    
    /**
     * @var float $squery
     * @ORM\Column(name="squery", type="float", length=4)
     */
    public $squery;
    
    /**
     * @var string $address
     * @ORM\Column(name="address", type="string", length=255)
     */
    public $address;
    
    /**
     * @var string $created_at
     * @ORM\Column(name="created_at", type="date")
     */
    public $created_at;
    
    /**
     * @var string $description
     * @ORM\Column(name="description", type="text")
     */
    public $description;
    /**
     * @var string $coordinates
     * @ORM\Column(name="coordinates", type="string", length=255)
     */
    public $coordinates;
}