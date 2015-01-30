<?php

namespace Admin\EinstitutAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enseignant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\EinstitutAdminBundle\Entity\EnseignantRepository")
 */
class Enseignant
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
     * @ORM\Column(name="matricule", type="string", length=30)
     */
    private $matricule;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=30)
     */
    private $statut;
    
    /**
     *
     * @ORM\OneToMany(targetEntity="Admin\EinstitutAdminBundle\Entity\Matiere",mappedBy="enseignant")
     */
    private $matiers;
    
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
     * Set matricule
     *
     * @param string $matricule
     * @return Enseignant
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return string 
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set statut
     *
     * @param string $statut
     * @return Enseignant
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string 
     */
    public function getStatut()
    {
        return $this->statut;
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
     * @return Enseignant
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

    /**
     * Set id_utilisateur
     *
     * @param \Admin\EinstitutAdminBundle\Entity\User $idUtilisateur
     * @return Enseignant
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
