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
 
}