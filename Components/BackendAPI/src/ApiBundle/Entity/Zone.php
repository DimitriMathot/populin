<?php

namespace ApiBundle\Entity;

use ApiBundle\Entity\Country;
use Doctrine\ORM\Mapping as ORM;

/**
 * Zones.
 *
 * @ORM\Table(
 *     name="zones",
 *     uniqueConstraints={
 *          @ORM\UniqueConstraint(name="UNIQ_A0EBC007989D9B62", columns={"slug"})
 *     },
 *     indexes={
 *          @ORM\Index(name="IDX_A0EBC0075373C966", columns={"country"}),
 *          @ORM\Index(name="type", columns={"type"}),
 *          @ORM\Index(name="idx_name", columns={"name"}),
 *          @ORM\Index(name="idx_country_name", columns={"country", "name"}),
 *          @ORM\Index(name="idx_ref", columns={"ref"}),
 *          @ORM\Index(name="idx_ref_official", columns={"ref_official"})
 *     }
 * )
 * @ORM\Entity(repositoryClass="ApiBundle\Repository\ZoneRepository")
 */
class Zone
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=255, nullable=false)
     */
    private $ref;

    /**
     * @var string
     *
     * @ORM\Column(name="ref_official", type="string", length=255, nullable=true)
     */
    private $refOfficial;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255, nullable=false)
     */
    private $slug;

    /**
     * @var int
     *
     * @ORM\Column(name="population", type="integer", nullable=true)
     */
    private $population;

    /**
     * @var string
     *
     * @ORM\Column(name="wikipedia", type="string", length=512, nullable=true)
     */
    private $wikipedia;

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
     * @var string
     *
     * @ORM\Column(name="shape_polygon", type="polygon", nullable=true)
     */
    private $shapePolygon;

    /**
     * @var string
     *
     * @ORM\Column(name="shape_multipolygon", type="multipolygon", nullable=true)
     */
    private $shapeMultipolygon;

    /**
     * @var string
     *
     * @ORM\Column(name="centroid", type="point", nullable=true)
     */
    private $centroid;

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
     * @var ZoneType
     *
     * @ORM\ManyToOne(targetEntity="ApiBundle\Entity\ZoneType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type", referencedColumnName="id")
     * })
     */
    private $type;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param string $ref
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
    }

    /**
     * @return string
     */
    public function getRefOfficial()
    {
        return $this->refOfficial;
    }

    /**
     * @param string $refOfficial
     */
    public function setRefOfficial($refOfficial)
    {
        $this->refOfficial = $refOfficial;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * @return int
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * @param int $population
     */
    public function setPopulation($population)
    {
        $this->population = $population;
    }

    /**
     * @return string
     */
    public function getWikipedia()
    {
        return $this->wikipedia;
    }

    /**
     * @param string $wikipedia
     */
    public function setWikipedia($wikipedia)
    {
        $this->wikipedia = $wikipedia;
    }

    /**
     * @return \DateTime
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * @param \DateTime $dateFrom
     */
    public function setDateFrom($dateFrom)
    {
        $this->dateFrom = $dateFrom;
    }

    /**
     * @return \DateTime
     */
    public function getDateUntil()
    {
        return $this->dateUntil;
    }

    /**
     * @param \DateTime $dateUntil
     */
    public function setDateUntil($dateUntil)
    {
        $this->dateUntil = $dateUntil;
    }

    /**
     * @return string
     */
    public function getShapePolygon()
    {
        return $this->shapePolygon;
    }

    /**
     * @param string $shapePolygon
     */
    public function setShapePolygon($shapePolygon)
    {
        $this->shapePolygon = $shapePolygon;
    }

    /**
     * @return string
     */
    public function getShapeMultipolygon()
    {
        return $this->shapeMultipolygon;
    }

    /**
     * @param string $shapeMultipolygon
     */
    public function setShapeMultipolygon($shapeMultipolygon)
    {
        $this->shapeMultipolygon = $shapeMultipolygon;
    }

    /**
     * @return string
     */
    public function getCentroid()
    {
        return $this->centroid;
    }

    /**
     * @param string $centroid
     */
    public function setCentroid($centroid)
    {
        $this->centroid = $centroid;
    }

    /**
     * @return Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param Country $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return \ApiBundle\Entity\ZoneType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param \ApiBundle\Entity\ZoneType $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
}
