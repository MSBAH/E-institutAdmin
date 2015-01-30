<?php

namespace Admin\EinstitutAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matiere
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\EinstitutAdminBundle\Entity\MatiereRepository")
 */
class Matiere
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
     * @ORM\Column(name="libelle", type="string", length=30)
     */
    private $libelle;

    /**
     * @var float
     *
     * @ORM\Column(name="coeff_matiere", type="float")
     */
    private $coeffMatiere;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="Admin\EinstitutAdminBundle\Entity\Enseignant",inversedBy="matiers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $enseignant;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="Admin\EinstitutAdminBundle\Entity\Module",inversedBy="matiers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $module;
    
    /**
     * @ORM\OneToMany(targetEntity="Admin\EinstitutAdminBundle\Entity\Note",mappedBy="matiere")
     */
    private $notes;


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
     * Set libelle
     *
     * @param string $libelle
     * @return Matiere
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set coeffMatiere
     *
     * @param float $coeffMatiere
     * @return Matiere
     */
    public function setCoeffMatiere($coeffMatiere)
    {
        $this->coeffMatiere = $coeffMatiere;

        return $this;
    }

    /**
     * Get coeffMatiere
     *
     * @return float 
     */
    public function getCoeffMatiere()
    {
        return $this->coeffMatiere;
    }

    /**
     * Set enseignant
     *
     * @param \Admin\EinstitutAdminBundle\Entity\Enseignant $enseignant
     * @return Matiere
     */
    public function setEnseignant(\Admin\EinstitutAdminBundle\Entity\Enseignant $enseignant)
    {
        $this->enseignant = $enseignant;

        return $this;
    }

    /**
     * Get enseignant
     *
     * @return \Admin\EinstitutAdminBundle\Entity\Enseignant 
     */
    public function getEnseignant()
    {
        return $this->enseignant;
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
     * @return Matiere
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
     * Set module
     *
     * @param \Admin\EinstitutAdminBundle\Entity\Module $module
     * @return Matiere
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
}
