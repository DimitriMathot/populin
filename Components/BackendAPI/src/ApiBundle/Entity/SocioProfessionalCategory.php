<?php

namespace ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SocioProfessionalCategory.
 *
 * @ORM\Table(
 *     name="socio_professional_categories",
 *     uniqueConstraints={
 *          @ORM\UniqueConstraint(name="idx_id", columns={"id"})
 *     },
 *     indexes={
 *          @ORM\Index(name="family", columns={"family"}),
 *          @ORM\Index(name="country", columns={"country"})
 *     }
 * )
 * @ORM\Entity
 */
class SocioProfessionalCategory
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255, nullable=true)
     */
    private $slug;

    /**
     * @var SocioProfessionalFamily
     *
     * @ORM\ManyToOne(targetEntity="ApiBundle\Entity\SocioProfessionalFamily")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="family", referencedColumnName="id")
     * })
     */
    private $family;

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
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     *
     * @return $this
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return \ApiBundle\Entity\SocioProfessionalFamily
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * @param \ApiBundle\Entity\SocioProfessionalFamily $family
     *
     * @return $this
     */
    public function setFamily($family)
    {
        $this->family = $family;

        return $this;
    }

    /**
     * @return \ApiBundle\Entity\Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param \ApiBundle\Entity\Country $country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }
}
