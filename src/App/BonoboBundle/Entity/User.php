<?php

namespace App\BonoboBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
* User
*
* @ORM\Table(name="user")
* @ORM\Entity(repositoryClass="App\BonoboBundle\Repository\UserRepository")
*/
class User extends BaseUser
{
    /**
    * @var int
    *
    * @ORM\Column(name="id", type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;

    protected $username;

    /**
    * @ORM\OneToOne(targetEntity="App\BonoboBundle\Entity\Bonobo", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $bonobo;

    /**
    * Get id
    *
    * @return int
    */
    public function getId()
    {
        return $this->id;
    }

    /**
    * Set bonobo
    *
    * @param \App\BonoboBundle\Entity\Bonobo $bonobo
    *
    * @return User
    */
    public function setBonobo(\App\BonoboBundle\Entity\Bonobo $bonobo)
    {
        $this->bonobo = $bonobo;

        return $this;
    }

    /**
    * Get bonobo
    *
    * @return \App\BonoboBundle\Entity\Bonobo
    */
    public function getBonobo()
    {
        return $this->bonobo;
    }
}
