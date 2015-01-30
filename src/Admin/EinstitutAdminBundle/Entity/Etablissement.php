<?php

namespace Admin\EinstitutAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etablissement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\EinstitutAdminBundle\Entity\EtablissementRepository")
 */
class Etablissement
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
     * @ORM\Column(name="nom_etabl", type="string", length=50)
     */
    private $nomEtabl;


    /**
     * @var string
     *
     * @ORM\Column(name="adress_etabl", type="text")
     */
    private $adressEtabl;

    /**
     * @var string
     *
     * @ORM\Column(name="pays_etabl", type="string", length=30)
     */
    private $paysEtabl;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_etabl", type="string", length=30)
     */
    private $villeEtabl;
    
    /**
     * @ORM\OneToMany(targetEntity="Admin\EinstitutAdminBundle\Entity\Diplome",mappedBy="etablissement")
     */
    private $diplomes;
    
    /**
     * @ORM\ManyToOne(targetEntity="Admin\EinstitutAdminBundle\Entity\User",inversedBy="etablissements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;


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
     * Set nomEtabl
     *
     * @param string $nomEtabl
     * @return Etablissement
     */
    public function setNomEtabl($nomEtabl)
    {
        $this->nomEtabl = $nomEtabl;

        return $this;
    }

    /**
     * Get nomEtabl
     *
     * @return string 
     */
    public function getNomEtabl()
    {
        return $this->nomEtabl;
    }


    /**
     * Set adressEtabl
     *
     * @param string $adressEtabl
     * @return Etablissement
     */
    public function setAdressEtabl($adressEtabl)
    {
        $this->adressEtabl = $adressEtabl;

        return $this;
    }

    /**
     * Get adressEtabl
     *
     * @return string 
     */
    public function getAdressEtabl()
    {
        return $this->adressEtabl;
    }

    /**
     * Set paysEtabl
     *
     * @param string $paysEtabl
     * @return Etablissement
     */
    public function setPaysEtabl($paysEtabl)
    {
        $this->paysEtabl = $paysEtabl;

        return $this;
    }

    /**
     * Get paysEtabl
     *
     * @return string 
     */
    public function getPaysEtabl()
    {
        return $this->paysEtabl;
    }

    /**
     * Set villeEtabl
     *
     * @param string $villeEtabl
     * @return Etablissement
     */
    public function setVilleEtabl($villeEtabl)
    {
        $this->villeEtabl = $villeEtabl;

        return $this;
    }

    /**
     * Get villeEtabl
     *
     * @return string 
     */
    public function getVilleEtabl()
    {
        return $this->villeEtabl;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->diplomes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add diplomes
     *
     * @param \Admin\EinstitutAdminBundle\Entity\Diplome $diplomes
     * @return Etablissement
     */
    public function addDiplome(\Admin\EinstitutAdminBundle\Entity\Diplome $diplomes)
    {
        $this->diplomes[] = $diplomes;

        return $this;
    }

    /**
     * Remove diplomes
     *
     * @param \Admin\EinstitutAdminBundle\Entity\Diplome $diplomes
     */
    public function removeDiplome(\Admin\EinstitutAdminBundle\Entity\Diplome $diplomes)
    {
        $this->diplomes->removeElement($diplomes);
    }

    /**
     * Get diplomes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDiplomes()
    {
        return $this->diplomes;
    }

    /**
     * Set user
     *
     * @param \Admin\EinstitutAdminBundle\Entity\User $user
     * @return Etablissement
     */
    public function setUser(\Admin\EinstitutAdminBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Admin\EinstitutAdminBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
