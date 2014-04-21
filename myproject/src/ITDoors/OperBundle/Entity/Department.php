<?php
namespace ITDoors\OperBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
*
* @ORM\Entity
 * @ORM\Table(name="department")
*/
class Department
{
    /*
     * @var integer $id
     *
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /*
     * @ORM\ManyToOne(targetEntity="City", inversedBy="posts")
     * @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     */
    protected $city_id;
    /*
     * @ORM\ManyToOne(targetEntity="Organization", inversedBy="posts")
     * @ORM\JoinColumn(name="organization_id", referencedColumnName="id")
     */
    protected $organization_id;

    /*
     * @var string $mpk
     * @ORM\Column(name="mpk", type="string", length=20)
     */
    protected $mpk;
    
    /**
     * @var string $name
     * @ORM\Column(name="name", type="string", length=20)
     */
    protected $name;
    
    /**
     * @var float $squery
     * @ORM\Column(name="squery", type="float", length=4)
     */
    protected $squery;
    
    /**
     * @var string $address
     * @ORM\Column(name="address", type="string", length=255)
     */
    protected $address;
    
    /**
     * @var string $created_at
     * @ORM\Column(name="created_at", type="date")
     */
    protected $created_at;
    
    /**
     * @var string $description
     * @ORM\Column(name="description", type="text")
     */
    protected $description;
    /**
     * @var string $coordinates
     * @ORM\Column(name="coordinates", type="string", length=255)
     */
    protected $coordinates;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set mpk
     *
     * @param string $mpk
     * @return Department
     */
    public function setMpk($mpk)
    {
        $this->mpk = $mpk;

        return $this;
    }

    /**
     * Get mpk
     *
     * @return string 
     */
    public function getMpk()
    {
        return $this->mpk;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Department
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set squery
     *
     * @param float $squery
     * @return Department
     */
    public function setSquery($squery)
    {
        $this->squery = $squery;

        return $this;
    }

    /**
     * Get squery
     *
     * @return float 
     */
    public function getSquery()
    {
        return $this->squery;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Department
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Department
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Department
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set coordinates
     *
     * @param string $coordinates
     * @return Department
     */
    public function setCoordinates($coordinates)
    {
        $this->coordinates = $coordinates;

        return $this;
    }

    /**
     * Get coordinates
     *
     * @return string 
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }

    /**
     * Set organization_id
     *
     * @param integer $organizationId
     * @return Department
     */
    public function setOrganizationId($organizationId)
    {
        $this->organization_id = $organizationId;

        return $this;
    }

    /**
     * Get organization_id
     *
     * @return integer 
     */
    public function getOrganizationId()
    {
        return $this->organization_id;
    }

    /**
     * Set city_id
     *
     * @param integer $cityId
     * @return Department
     */
    public function setCityId($cityId)
    {
        $this->city_id = $cityId;

        return $this;
    }

    /**
     * Get city_id
     *
     * @return integer 
     */
    public function getCityId()
    {
        return $this->city_id;
    }
}
