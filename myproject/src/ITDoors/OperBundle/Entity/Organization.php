<?php

namespace ITDoors\OperBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
*
* @ORM\Entity
*/
class Organization
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
     * @var string $name
     * @ORM\Column(name="name", type="string", length=255)
     */
    public $name;
 
    /**
     * @var string $contact
     * @ORM\Column(name="contact", type="string", length=255)
     */
    public $contact;
 

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
     * Set name
     *
     * @param string $name
     * @return Organization
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
     * Set contact
     *
     * @param string $contact
     * @return Organization
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string 
     */
    public function getContact()
    {
        return $this->contact;
    }
}
