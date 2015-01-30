<?php

namespace Admin\EinstitutAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Diplome
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\EinstitutAdminBundle\Entity\DiplomeRepository")
 */
class Diplome
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
     * @ORM\Column(name="intitule_diplome", type="string", length=30)
     */
    private $intituleDiplome;

    /**
     * @var string
     *
     * @ORM\Column(name="type_diplome", type="string", length=30)
     */
    private $typeDiplome;
    
    /**
     * @ORM\ManyToOne(targetEntity="Admin\EinstitutAdminBundle\Entity\Etablissement",inversedBy="diplomes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $etablissement;


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
     * Set intituleDiplome
     *
     * @param string $intituleDiplome
     * @return Diplome
     */
    public function setIntituleDiplome($intituleDiplome)
    {
        $this->intituleDiplome = $intituleDiplome;

        return $this;
    }

    /**
     * Get intituleDiplome
     *
     * @return string 
     */
    public function getIntituleDiplome()
    {
        return $this->intituleDiplome;
    }

    /**
     * Set typeDiplome
     *
     * @param string $typeDiplome
     * @return Diplome
     */
    public function setTypeDiplome($typeDiplome)
    {
        $this->typeDiplome = $typeDiplome;

        return $this;
    }

    /**
     * Get typeDiplome
     *
     * @return string 
     */
    public function getTypeDiplome()
    {
        return $this->typeDiplome;
    }

    /**
     * Set etablissement
     *
     * @param \Admin\EinstitutAdminBundle\Entity\Etablissement $etablissement
     * @return Diplome
     */
    public function setEtablissement(\Admin\EinstitutAdminBundle\Entity\Etablissement $etablissement)
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    /**
     * Get etablissement
     *
     * @return \Admin\EinstitutAdminBundle\Entity\Etablissement 
     */
    public function getEtablissement()
    {
        return $this->etablissement;
    }
}
