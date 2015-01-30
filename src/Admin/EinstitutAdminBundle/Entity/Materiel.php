<?php

namespace Admin\EinstitutAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materiel
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\EinstitutAdminBundle\Entity\MaterielRepository")
 */
class Materiel
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
     * @ORM\Column(name="nom_materiel", type="string", length=30)
     */
    private $nomMateriel;



    /**
     * @var integer
     *
     * @ORM\Column(name="qt_materiel", type="integer")
     */
    private $qtMateriel;


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
     * Set nomMateriel
     *
     * @param string $nomMateriel
     * @return Materiel
     */
    public function setNomMateriel($nomMateriel)
    {
        $this->nomMateriel = $nomMateriel;

        return $this;
    }

    /**
     * Get nomMateriel
     *
     * @return string 
     */
    public function getNomMateriel()
    {
        return $this->nomMateriel;
    }

    /**
     * Set qtMateriel
     *
     * @param integer $qtMateriel
     * @return Materiel
     */
    public function setQtMateriel($qtMateriel)
    {
        $this->qtMateriel = $qtMateriel;

        return $this;
    }

    /**
     * Get qtMateriel
     *
     * @return integer 
     */
    public function getQtMateriel()
    {
        return $this->qtMateriel;
    }
}
