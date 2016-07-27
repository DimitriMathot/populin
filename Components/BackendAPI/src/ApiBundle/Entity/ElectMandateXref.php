<?php

namespace ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ElectMandateXref.
 *
 * @ORM\Table(
 *     name="elect_mandate_xref",
 *     uniqueConstraints={
 *          @ORM\UniqueConstraint(name="idx_elect_id_mandate_id_zone_id", columns={"elect", "mandate", "zone_election", "date_from", "date_until", "zone_scope"})
 *     },
 *     indexes={
 *          @ORM\Index(name="idx_elect_id", columns={"elect"}),
 *          @ORM\Index(name="idx_mandate_id", columns={"mandate"}),
 *          @ORM\Index(name="idx_zone_id", columns={"zone_election"}),
 *          @ORM\Index(name="political_label", columns={"political_label"}),
 *          @ORM\Index(name="country", columns={"country"}),
 *          @ORM\Index(name="zone_scope", columns={"zone_scope"})
 *     }
 * )
 * @ORM\Entity
 */
class ElectMandateXref
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_from", type="date", nullable=true)
     */
    private $dateFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_until", type="date", nullable=true)
     */
    private $dateUntil;

    /**
     * @var Elect
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="ApiBundle\Entity\Elect")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="elect", referencedColumnName="id")
     * })
     */
    private $elect;

    /**
     * @var Mandate
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="ApiBundle\Entity\Mandate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mandate", referencedColumnName="id")
     * })
     */
    private $mandate;

    /**
     * @var Zone
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="ApiBundle\Entity\Zone")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="zone_election", referencedColumnName="id")
     * })
     */
    private $zoneElection;

    /**
     * @var PoliticalLabel
     *
     * @ORM\ManyToOne(targetEntity="ApiBundle\Entity\PoliticalLabel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="political_label", referencedColumnName="id")
     * })
     */
    private $politicalLabel;

    /**
     * @var Country
     *
     * @ORM\ManyToOne(targetEntity="ApiBundle\Entity\Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country", referencedColumnName="id")
     * })
     */
    private $country;

    /**
     * @var Zone
     *
     * @ORM\ManyToOne(targetEntity="ApiBundle\Entity\Zone")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="zone_scope", referencedColumnName="id")
     * })
     */
    private $zoneScope;

    /**
     * Set dateFrom.
     *
     * @param \DateTime $dateFrom
     *
     * @return ElectMandateXref
     */
    public function setDateFrom(\DateTime $dateFrom)
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    /**
     * Get dateFrom.
     *
     * @return \DateTime
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Set dateUntil.
     *
     * @param \DateTime $dateUntil
     *
     * @return ElectMandateXref
     */
    public function setDateUntil(\DateTime $dateUntil)
    {
        $this->dateUntil = $dateUntil;

        return $this;
    }

    /**
     * Get dateUntil.
     *
     * @return \DateTime
     */
    public function getDateUntil()
    {
        return $this->dateUntil;
    }

    /**
     * Set elect.
     *
     * @param Elect $elect
     *
     * @return ElectMandateXref
     */
    public function setElect(Elect $elect)
    {
        $this->elect = $elect;

        return $this;
    }

    /**
     * Get elect.
     *
     * @return Elect
     */
    public function getElect()
    {
        return $this->elect;
    }

    /**
     * Set mandate.
     *
     * @param Mandate $mandate
     *
     * @return ElectMandateXref
     */
    public function setMandate(Mandate $mandate)
    {
        $this->mandate = $mandate;

        return $this;
    }

    /**
     * Get mandate.
     *
     * @return Mandate
     */
    public function getMandate()
    {
        return $this->mandate;
    }

    /**
     * Set zoneElection.
     *
     * @param Zone $zoneElection
     *
     * @return ElectMandateXref
     */
    public function setZoneElection(Zone $zoneElection)
    {
        $this->zoneElection = $zoneElection;

        return $this;
    }

    /**
     * Get zoneElection.
     *
     * @return Zone
     */
    public function getZoneElection()
    {
        return $this->zoneElection;
    }

    /**
     * Set politicalLabel.
     *
     * @param PoliticalLabel $politicalLabel
     *
     * @return ElectMandateXref
     */
    public function setPoliticalLabel(PoliticalLabel $politicalLabel = null)
    {
        $this->politicalLabel = $politicalLabel;

        return $this;
    }

    /**
     * Get politicalLabel.
     *
     * @return PoliticalLabel
     */
    public function getPoliticalLabel()
    {
        return $this->politicalLabel;
    }

    /**
     * Set country.
     *
     * @param Country $country
     *
     * @return ElectMandateXref
     */
    public function setCountry(Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country.
     *
     * @return Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set zoneScope.
     *
     * @param Zone $zoneScope
     *
     * @return ElectMandateXref
     */
    public function setZoneScope(Zone $zoneScope = null)
    {
        $this->zoneScope = $zoneScope;

        return $this;
    }

    /**
     * Get zoneScope.
     *
     * @return Zone
     */
    public function getZoneScope()
    {
        return $this->zoneScope;
    }
}
