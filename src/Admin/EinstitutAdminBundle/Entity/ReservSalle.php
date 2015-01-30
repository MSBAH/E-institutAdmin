<?php

namespace Admin\EinstitutAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReservSalle
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\EinstitutAdminBundle\Entity\ReservSalleRepository")
 */
class ReservSalle
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Admin\EinstitutAdminBundle\Entity\Salle")
     */
    private $salle;
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Admin\EinstitutAdminBundle\Entity\Enseignant")
     */
    private $enseignant;
    

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateReserv", type="datetime")
     */
    private $dateReserv;

    /**
     * Set dateReserv
     *
     * @param \DateTime $dateReserv
     * @return ReservSalle
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
     * Set salle
     *
     * @param \Admin\EinstitutAdminBundle\Entity\Salle $salle
     * @return ReservSalle
     */
    public function setSalle(\Admin\EinstitutAdminBundle\Entity\Salle $salle)
    {
        $this->salle = $salle;

        return $this;
    }

    /**
     * Get salle
     *
     * @return \Admin\EinstitutAdminBundle\Entity\Salle 
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * Set enseignat
     *
     * @param \Admin\EinstitutAdminBundle\Entity\Enseignant $enseignat
     * @return ReservSalle
     */
    public function setEnseignat(\Admin\EinstitutAdminBundle\Entity\Enseignant $enseignat)
    {
        $this->enseignat = $enseignat;

        return $this;
    }

    /**
     * Get enseignat
     *
     * @return \Admin\EinstitutAdminBundle\Entity\Enseignant 
     */
    public function getEnseignat()
    {
        return $this->enseignat;
    }
}
