<?php

namespace Admin\EinstitutAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Candidat
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\EinstitutAdminBundle\Entity\CandidatRepository")
 */
class Candidat
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
     * @ORM\OneToMany(targetEntity="Admin\EinstitutAdminBundle\Entity\Dossier",mappedBy="Candidat")
     */
    private $dossiers;
    
    /**
    *@ORM\OneToOne(targetEntity="Admin\EinstitutAdminBundle\Entity\User")
    *@ORM\JoinColumn(nullable=false)
    */
    private $id_utilisateur;
    


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
     * Constructor
     */
    public function __construct()
    {
        $this->dossiers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add dossiers
     *
     * @param \Admin\EinstitutAdminBundle\Entity\Dossier $dossiers
     * @return Candidat
     */
    public function addDossier(\Admin\EinstitutAdminBundle\Entity\Dossier $dossiers)
    {
        $this->dossiers[] = $dossiers;

        return $this;
    }

    /**
     * Remove dossiers
     *
     * @param \Admin\EinstitutAdminBundle\Entity\Dossier $dossiers
     */
    public function removeDossier(\Admin\EinstitutAdminBundle\Entity\Dossier $dossiers)
    {
        $this->dossiers->removeElement($dossiers);
    }

    /**
     * Get dossiers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDossiers()
    {
        return $this->dossiers;
    }

    /**
     * Set id_utilisateur
     *
     * @param \Admin\EinstitutAdminBundle\Entity\User $idUtilisateur
     * @return Candidat
     */
    public function setIdUtilisateur(\Admin\EinstitutAdminBundle\Entity\User $idUtilisateur)
    {
        $this->id_utilisateur = $idUtilisateur;

        return $this;
    }

    /**
     * Get id_utilisateur
     *
     * @return \Admin\EinstitutAdminBundle\Entity\User 
     */
    public function getIdUtilisateur()
    {
        return $this->id_utilisateur;
    }
}
