<?php

namespace Admin\EinstitutAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InscriptionModule
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\EinstitutAdminBundle\Entity\InscriptionModuleRepository")
 */
class InscriptionModule
{

        /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Admin\EinstitutAdminBundle\Entity\Note")
     */
    private $note;
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Admin\EinstitutAdminBundle\Entity\Module")
     */
    private $module;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateInscription", type="date")
     */
    private $dateInscription;

    /**
     * @var float
     *
     * @ORM\Column(name="moyenne", type="float")
     */
    private $moyenne;

    /**
     * @var float
     *
     * @ORM\Column(name="moyenneFixe", type="float")
     */
    private $moyenneFixe;
    



    /**
     * Set dateInscription
     *
     * @param \DateTime $dateInscription
     * @return InscriptionModule
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
     * Set moyenne
     *
     * @param float $moyenne
     * @return InscriptionModule
     */
    public function setMoyenne($moyenne)
    {
        $this->moyenne = $moyenne;

        return $this;
    }

    /**
     * Get moyenne
     *
     * @return float 
     */
    public function getMoyenne()
    {
        return $this->moyenne;
    }

    /**
     * Set moyenneFixe
     *
     * @param float $moyenneFixe
     * @return InscriptionModule
     */
    public function setMoyenneFixe($moyenneFixe)
    {
        $this->moyenneFixe = $moyenneFixe;

        return $this;
    }

    /**
     * Get moyenneFixe
     *
     * @return float 
     */
    public function getMoyenneFixe()
    {
        return $this->moyenneFixe;
    }

    /**
     * Set note
     *
     * @param \Admin\EinstitutAdminBundle\Entity\Note $note
     * @return InscriptionModule
     */
    public function setNote(\Admin\EinstitutAdminBundle\Entity\Note $note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return \Admin\EinstitutAdminBundle\Entity\Note 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set module
     *
     * @param \Admin\EinstitutAdminBundle\Entity\Module $module
     * @return InscriptionModule
     */
    public function setModule(\Admin\EinstitutAdminBundle\Entity\Module $module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return \Admin\EinstitutAdminBundle\Entity\Module 
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set inscriptionDiplome
     *
     * @param \Admin\EinstitutAdminBundle\Entity\InscriptionDiplome $inscriptionDiplome
     * @return InscriptionModule
     */
    public function setInscriptionDiplome(\Admin\EinstitutAdminBundle\Entity\InscriptionDiplome $inscriptionDiplome)
    {
        $this->inscriptionDiplome = $inscriptionDiplome;

        return $this;
    }

    /**
     * Get inscriptionDiplome
     *
     * @return \Admin\EinstitutAdminBundle\Entity\InscriptionDiplome 
     */
    public function getInscriptionDiplome()
    {
        return $this->inscriptionDiplome;
    }
}
