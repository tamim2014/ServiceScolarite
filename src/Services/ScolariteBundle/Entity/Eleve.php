<?php

namespace Services\ScolariteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eleve
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Eleve
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="CODE", type="integer")
     */
    private $cODE;

    /**
     * @var string
     *
     * @ORM\Column(name="nomEleve", type="string", length=30)
     */
    private $nomEleve;

    /**
     * @var string
     *
     * @ORM\Column(name="emailEleve", type="string", length=30)
     */
    private $emailEleve;

    /**
     * @var string
     *
     * @ORM\Column(name="photoEleve", type="string", length=30)
     */
    private $photoEleve;


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
     * Set cODE
     *
     * @param integer $cODE
     * @return Eleve
     */
    public function setCODE($cODE)
    {
        $this->cODE = $cODE;
    
        return $this;
    }

    /**
     * Get cODE
     *
     * @return integer 
     */
    public function getCODE()
    {
        return $this->cODE;
    }

    /**
     * Set nomEleve
     *
     * @param string $nomEleve
     * @return Eleve
     */
    public function setNomEleve($nomEleve)
    {
        $this->nomEleve = $nomEleve;
    
        return $this;
    }

    /**
     * Get nomEleve
     *
     * @return string 
     */
    public function getNomEleve()
    {
        return $this->nomEleve;
    }

    /**
     * Set emailEleve
     *
     * @param string $emailEleve
     * @return Eleve
     */
    public function setEmailEleve($emailEleve)
    {
        $this->emailEleve = $emailEleve;
    
        return $this;
    }

    /**
     * Get emailEleve
     *
     * @return string 
     */
    public function getEmailEleve()
    {
        return $this->emailEleve;
    }

    /**
     * Set photoEleve
     *
     * @param string $photoEleve
     * @return Eleve
     */
    public function setPhotoEleve($photoEleve)
    {
        $this->photoEleve = $photoEleve;
    
        return $this;
    }

    /**
     * Get photoEleve
     *
     * @return string 
     */
    public function getPhotoEleve()
    {
        return $this->photoEleve;
    }
}
