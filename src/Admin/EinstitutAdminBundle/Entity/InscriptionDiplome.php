<?php

namespace Admin\EinstitutAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InscriptionDiplome
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\EinstitutAdminBundle\Entity\InscriptionDiplomeRepository")
 */
class InscriptionDiplome
{
    
    
     /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Admin\EinstitutAdminBundle\Entity\Etudiant")
     */
    private $etudiant;
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Admin\EinstitutAdminBundle\Entity\Diplome")
     */
    private $diplome;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_inscription", type="date")
     */
    private $dateInscription;
    
 



    /**
     * Set dateInscription
     *
     * @param \DateTime $dateInscription
     * @return InscriptionDiplome
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return \DateTime 
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set etudiant
     *
     * @param \Admin\EinstitutAdminBundle\Entity\Etudiant $etudiant
     * @return InscriptionDiplome
     */
    public function setEtudiant(\Admin\EinstitutAdminBundle\Entity\Etudiant $etudiant)
    {
        $this->etudiant = $etudiant;

        return $this;
    }

    /**
     * Get etudiant
     *
     * @return \Admin\EinstitutAdminBundle\Entity\Etudiant 
     */
    public function getEtudiant()
    {
        return $this->etudiant;
    }

    /**
     * Set diplome
     *
     * @param \Admin\EinstitutAdminBundle\Entity\Diplome $diplome
     * @return InscriptionDiplome
     */
    public function setDiplome(\Admin\EinstitutAdminBundle\Entity\Diplome $diplome)
    {
        $this->diplome = $diplome;

        return $this;
    }

    /**
     * Get diplome
     *
     * @return \Admin\EinstitutAdminBundle\Entity\Diplome 
     */
    public function getDiplome()
    {
        return $this->diplome;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->inscriptionModules = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add inscriptionModules
     *
     * @param \Admin\EinstitutAdminBundle\Entity\InscriptionModule $inscriptionModules
     * @return InscriptionDiplome
     */
    public function addInscriptionModule(\Admin\EinstitutAdminBundle\Entity\InscriptionModule $inscriptionModules)
    {
        $this->inscriptionModules[] = $inscriptionModules;

        return $this;
    }

    /**
     * Remove inscriptionModules
     *
     * @param \Admin\EinstitutAdminBundle\Entity\InscriptionModule $inscriptionModules
     */
    public function removeInscriptionModule(\Admin\EinstitutAdminBundle\Entity\InscriptionModule $inscriptionModules)
    {
        $this->inscriptionModules->removeElement($inscriptionModules);
    }

    /**
     * Get inscriptionModules
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getInscriptionModules()
    {
        return $this->inscriptionModules;
    }
}
