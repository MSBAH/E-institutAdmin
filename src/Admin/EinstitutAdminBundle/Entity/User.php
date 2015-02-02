<?php
// src/Admin/EinstitutAdminBundle/Entity/User.php

namespace Admin\EinstitutAdminBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Utilisateurs")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string")
     */
    private $nom;
    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string")
     */
    private $prenom;
    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string")
     */
    private $avatar;
    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string")
     */
    private $tel;
    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string")
     */
    private $sexe;
    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text")
     */
    private $adresse;
    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string")
     */
    private $ville;
    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string")
     */
    private $pays;
    
    /**
     * @ORM\OneToMany(targetEntity="Admin\EinstitutAdminBundle\Entity\Etablissement",mappedBy="user")
     */
    private $etablissements;
    

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

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
     * Add etablissements
     *
     * @param \Admin\EinstitutAdminBundle\Entity\Etablissement $etablissements
     * @return User
     */
    public function addEtablissement(\Admin\EinstitutAdminBundle\Entity\Etablissement $etablissements)
    {
        $this->etablissements[] = $etablissements;

        return $this;
    }

    /**
     * Remove etablissements
     *
     * @param \Admin\EinstitutAdminBundle\Entity\Etablissement $etablissements
     */
    public function removeEtablissement(\Admin\EinstitutAdminBundle\Entity\Etablissement $etablissements)
    {
        $this->etablissements->removeElement($etablissements);
    }

    /**
     * Get etablissements
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEtablissements()
    {
        return $this->etablissements;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     * @return User
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string 
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return User
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return User
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return User
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return User
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return User
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->pays;
    }
}
