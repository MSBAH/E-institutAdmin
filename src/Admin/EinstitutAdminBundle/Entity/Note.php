<?php

namespace Admin\EinstitutAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Note
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\EinstitutAdminBundle\Entity\NoteRepository")
 */
class Note
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
     * @var float
     *
     * @ORM\Column(name="valeur", type="float")
     */
    private $valeur;
    
    /**
     * @ORM\ManyToOne(targetEntity="Admin\EinstitutAdminBundle\Entity\Matiere",inversedBy="notes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $matiere;
    
    /**
     * @ORM\ManyToOne(targetEntity="Admin\EinstitutAdminBundle\Entity\Etudiant",inversedBy="notes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $etudiant;


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
     * Set valeur
     *
     * @param float $valeur
     * @return Note
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return float 
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * Set matiere
     *
     * @param \Admin\EinstitutAdminBundle\Entity\Matiere $matiere
     * @return Note
     */
    public function setMatiere(\Admin\EinstitutAdminBundle\Entity\Matiere $matiere)
    {
        $this->matiere = $matiere;

        return $this;
    }

    /**
     * Get matiere
     *
     * @return \Admin\EinstitutAdminBundle\Entity\Matiere 
     */
    public function getMatiere()
    {
        return $this->matiere;
    }

    /**
     * Set etudiant
     *
     * @param \Admin\EinstitutAdminBundle\Entity\Etudiant $etudiant
     * @return Note
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
}
