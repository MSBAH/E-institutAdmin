<?php

namespace Admin\EinstitutAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\EinstitutAdminBundle\Entity\EtudiantRepository")
 */
class Etudiant
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
     * @ORM\Column(name="num_etudiant", type="integer")
     */
    private $numEtudiant;
    
    /**
     * @ORM\OneToMany(targetEntity="Admin\EinstitutAdminBundle\Entity\Note",mappedBy="etudiant")
     */
    private $notes;
    
    /**
     * @ORM\OneToMany(targetEntity="Admin\EinstitutAdminBundle\Entity\Absence",mappedBy="etudiant")
     */
    private $absences;


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
     * Set numEtudiant
     *
     * @param integer $numEtudiant
     * @return Etudiant
     */
    public function setNumEtudiant($numEtudiant)
    {
        $this->numEtudiant = $numEtudiant;

        return $this;
    }

    /**
     * Get numEtudiant
     *
     * @return integer 
     */
    public function getNumEtudiant()
    {
        return $this->numEtudiant;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->notes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add notes
     *
     * @param \Admin\EinstitutAdminBundle\Entity\Note $notes
     * @return Etudiant
     */
    public function addNote(\Admin\EinstitutAdminBundle\Entity\Note $notes)
    {
        $this->notes[] = $notes;

        return $this;
    }

    /**
     * Remove notes
     *
     * @param \Admin\EinstitutAdminBundle\Entity\Note $notes
     */
    public function removeNote(\Admin\EinstitutAdminBundle\Entity\Note $notes)
    {
        $this->notes->removeElement($notes);
    }

    /**
     * Get notes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Add absences
     *
     * @param \Admin\EinstitutAdminBundle\Entity\Absence $absences
     * @return Etudiant
     */
    public function addAbsence(\Admin\EinstitutAdminBundle\Entity\Absence $absences)
    {
        $this->absences[] = $absences;

        return $this;
    }

    /**
     * Remove absences
     *
     * @param \Admin\EinstitutAdminBundle\Entity\Absence $absences
     */
    public function removeAbsence(\Admin\EinstitutAdminBundle\Entity\Absence $absences)
    {
        $this->absences->removeElement($absences);
    }

    /**
     * Get absences
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAbsences()
    {
        return $this->absences;
    }
}
