<?php

namespace App\BonoboBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bonobo
 *
 * @ORM\Table(name="bonobo")
 * @ORM\Entity(repositoryClass="App\BonoboBundle\Repository\BonoboRepository")
 */
class Bonobo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="naissance", type="datetime")
     */
    private $naissance;

    /**
     * @var string
     *
     * @ORM\Column(name="famille", type="string", length=255)
     */
    private $famille;

    /**
     * @var string
     *
     * @ORM\Column(name="race", type="string", length=255)
     */
    private $race;

    /**
     * @var string
     *
     * @ORM\Column(name="nourriture", type="string", length=255)
     */
    private $nourriture;

    /*
    * @ORM\ManyToMany(targetEntity="App\BonoboBundle\Entity\Ami", cascade={"persist"})
    *
    private $amis;
*/
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
     * Set naissance
     *
     * @param \DateTime $naissance
     *
     * @return Bonobo
     */
    public function setNaissance($naissance)
    {
        $this->naissance = $naissance;

        return $this;
    }

    /**
     * Get naissance
     *
     * @return \DateTime
     */
    public function getNaissance()
    {
        return $this->naissance;
    }

    /**
     * Set famille
     *
     * @param string $famille
     *
     * @return Bonobo
     */
    public function setFamille($famille)
    {
        $this->famille = $famille;

        return $this;
    }

    /**
     * Get famille
     *
     * @return string
     */
    public function getFamille()
    {
        return $this->famille;
    }

    /**
     * Set race
     *
     * @param string $race
     *
     * @return Bonobo
     */
    public function setRace($race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get race
     *
     * @return string
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set nourriture
     *
     * @param string $nourriture
     *
     * @return Bonobo
     */
    public function setNourriture($nourriture)
    {
        $this->nourriture = $nourriture;

        return $this;
    }

    /**
     * Get nourriture
     *
     * @return string
     */
    public function getNourriture()
    {
        return $this->nourriture;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->amis = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /*
     * Add ami
     *
     * @param \App\BonoboBundle\Entity\Ami $ami
     *
     * @return Bonobo
     *
    public function addAmi(\App\BonoboBundle\Entity\Ami $ami)
    {
        $this->amis[] = $ami;

        return $this;
    }

    /*
     * Remove ami
     *
     * @param \App\BonoboBundle\Entity\Ami $ami
     *
    public function removeAmi(\App\BonoboBundle\Entity\Ami $ami)
    {
        $this->amis->removeElement($ami);
    }

    /*
     * Get amis
     *
     * @return \Doctrine\Common\Collections\Collection
     *
    public function getAmis()
    {
        return $this->amis;
    }
    */
}
