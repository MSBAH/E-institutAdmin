<?php

namespace Admin\EinstitutAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Module
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\EinstitutAdminBundle\Entity\ModuleRepository")
 */
class Module
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
     * @var string
     *
     * @ORM\Column(name="libelle_module", type="string", length=30)
     */
    private $libelleModule;

    /**
     * @var integer
     *
     * @ORM\Column(name="coeff_module", type="integer")
     */
    private $coeffModule;
    
    /**
     *
     * @ORM\OneToMany(targetEntity="Admin\EinstitutAdminBundle\Entity\Matiere",mappedBy="module")
     */
    private $matiers;


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
     * Set libelleModule
     *
     * @param string $libelleModule
     * @return Module
     */
    public function setLibelleModule($libelleModule)
    {
        $this->libelleModule = $libelleModule;

        return $this;
    }

    /**
     * Get libelleModule
     *
     * @return string 
     */
    public function getLibelleModule()
    {
        return $this->libelleModule;
    }

    /**
     * Set coeffModule
     *
     * @param integer $coeffModule
     * @return Module
     */
    public function setCoeffModule($coeffModule)
    {
        $this->coeffModule = $coeffModule;

        return $this;
    }

    /**
     * Get coeffModule
     *
     * @return integer 
     */
    public function getCoeffModule()
    {
        return $this->coeffModule;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->matiers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add matiers
     *
     * @param \Admin\EinstitutAdminBundle\Entity\Matiere $matiers
     * @return Module
     */
    public function addMatier(\Admin\EinstitutAdminBundle\Entity\Matiere $matiers)
    {
        $this->matiers[] = $matiers;

        return $this;
    }

    /**
     * Remove matiers
     *
     * @param \Admin\EinstitutAdminBundle\Entity\Matiere $matiers
     */
    public function removeMatier(\Admin\EinstitutAdminBundle\Entity\Matiere $matiers)
    {
        $this->matiers->removeElement($matiers);
    }

    /**
     * Get matiers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMatiers()
    {
        return $this->matiers;
    }
}
