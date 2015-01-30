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
}
