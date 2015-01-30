<?php

namespace Admin\EinstitutAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\EinstitutAdminBundle\Entity\ReservationRepository")
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Admin\EinstitutAdminBundle\Entity\Enseignant")
     */
    private $enseignant;
    
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Admin\EinstitutAdminBundle\Entity\Materiel")
     */
    private $materiel;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="qte_reserv", type="integer")
     */
    private $qteReserv;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_reserv", type="datetime")
     */
    private $dateReserv;


   

    /**
     * Set qteReserv
     *
     * @param integer $qteReserv
     * @return Reservation
     */
    public function setQteReserv($qteReserv)
    {
        $this->qteReserv = $qteReserv;

        return $this;
    }

    /**
     * Get qteReserv
     *
     * @return integer 
     */
    public function getQteReserv()
    {
        return $this->qteReserv;
    }

    /**
     * Set dateReserv
     *
     * @param \DateTime $dateReserv
     * @return Reservation
     */
    public function setDateReserv($dateReserv)
    {
        $this->dateReserv = $dateReserv;

        return $this;
    }

    /**
     * Get dateReserv
     *
     * @return \DateTime 
     */
    public function getDateReserv()
    {
        return $this->dateReserv;
    }

    /**
     * Set enseignant
     *
     * @param \Admin\EinstitutAdminBundle\Entity\Enseignant $enseignant
     * @return Reservation
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
     * Set materiel
     *
     * @param \Admin\EinstitutAdminBundle\Entity\Materiel $materiel
     * @return Reservation
     */
    public function setMateriel(\Admin\EinstitutAdminBundle\Entity\Materiel $materiel)
    {
        $this->materiel = $materiel;

        return $this;
    }

    /**
     * Get materiel
     *
     * @return \Admin\EinstitutAdminBundle\Entity\Materiel 
     */
    public function getMateriel()
    {
        return $this->materiel;
    }
}
