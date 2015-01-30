<?php

namespace Admin\EinstitutAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dossier
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\EinstitutAdminBundle\Entity\DossierRepository")
 */
class Dossier
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
     * @ORM\Column(name="num_dossier", type="string", length=50)
     */
    private $numDossier;
    
    /**
     * @ORM\OneToMany(targetEntity="Admin\EinstitutAdminBundle\Entity\Fichier",mappedBy="Dossier")
     */
    private $fichiers;
    
    /**
     * @ORM\ManyToOne(targetEntity="Admin\EinstitutAdminBundle\Entity\Candidat",inversedBy="dossiers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $candidat;


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
     * Set numDossier
     *
     * @param string $numDossier
     * @return Dossier
     */
    public function setNumDossier($numDossier)
    {
        $this->numDossier = $numDossier;

        return $this;
    }

    /**
     * Get numDossier
     *
     * @return string 
     */
    public function getNumDossier()
    {
        return $this->numDossier;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fichiers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add fichiers
     *
     * @param \Admin\EinstitutAdminBundle\Entity\Fichier $fichiers
     * @return Dossier
     */
    public function addFichier(\Admin\EinstitutAdminBundle\Entity\Fichier $fichiers)
    {
        $this->fichiers[] = $fichiers;

        return $this;
    }

    /**
     * Remove fichiers
     *
     * @param \Admin\EinstitutAdminBundle\Entity\Fichier $fichiers
     */
    public function removeFichier(\Admin\EinstitutAdminBundle\Entity\Fichier $fichiers)
    {
        $this->fichiers->removeElement($fichiers);
    }

    /**
     * Get fichiers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFichiers()
    {
        return $this->fichiers;
    }

    /**
     * Set candidat
     *
     * @param \Admin\EinstitutAdminBundle\Entity\Candidat $candidat
     * @return Dossier
     */
    public function setCandidat(\Admin\EinstitutAdminBundle\Entity\Candidat $candidat)
    {
        $this->candidat = $candidat;

        return $this;
    }

    /**
     * Get candidat
     *
     * @return \Admin\EinstitutAdminBundle\Entity\Candidat 
     */
    public function getCandidat()
    {
        return $this->candidat;
    }
}
