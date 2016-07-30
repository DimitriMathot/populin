<?php

namespace ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mandate.
 *
 * @ORM\Table(
 *     name="mandates",
 *     uniqueConstraints={
 *          @ORM\UniqueConstraint(name="idx_id", columns={"id"})
 *     },
 *     indexes={
 *          @ORM\Index(name="zone_type", columns={"zone_type"}),
 *          @ORM\Index(name="hierarchy", columns={"hierarchy"})
 *     }
 * )
 * @ORM\Entity
 */
class Mandate
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
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="wikipedia", type="string", length=255, nullable=true)
     */
    private $wikipedia;

    /**
     * @var ZoneType
     *
     * @ORM\ManyToOne(targetEntity="ApiBundle\Entity\ZoneType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="zone_type", referencedColumnName="id")
     * })
     */
    private $zoneType;

    /**
     * @var Mandate
     *
     * @ORM\ManyToOne(targetEntity="ApiBundle\Entity\Mandate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="hierarchy", referencedColumnName="id")
     * })
     */
    private $hierarchy;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     *
     * @return $this
     */
    public function setWikipedia($wikipedia)
    {
        $this->wikipedia = $wikipedia;

        return $this;
    }

    /**
     * @return \ApiBundle\Entity\ZoneType
     */
    public function getZoneType()
    {
        return $this->zoneType;
    }

    /**
     * @param \ApiBundle\Entity\ZoneType $zoneType
     *
     * @return $this
     */
    public function setZoneType($zoneType)
    {
        $this->zoneType = $zoneType;

        return $this;
    }

    /**
     * @return Mandate
     */
    public function getHierarchy()
    {
        return $this->hierarchy;
    }

    /**
     * @param Mandate $hierarchy
     *
     * @return $this
     */
    public function setHierarchy($hierarchy)
    {
        $this->hierarchy = $hierarchy;

        return $this;
    }
}
