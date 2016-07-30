<?php

namespace ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Country.
 *
 * @ORM\Table(
 *     name="countries",
 *     uniqueConstraints={
 *          @ORM\UniqueConstraint(name="idx_id", columns={"id"}),
 *          @ORM\UniqueConstraint(name="UNIQ_5373C9665348A0FF", columns={"iso_code_2_letters"}),
 *          @ORM\UniqueConstraint(name="idx_iso_code_3_letters", columns={"iso_code_3_letters"})
 *     },
 *     indexes={
 *          @ORM\Index(name="idx_iso_code_numbers", columns={"iso_code_numbers"}),
 *          @ORM\Index(name="idx_name", columns={"name"})
 *     }
 * )
 * @ORM\Entity
 */
class Country
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
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="formalName", type="string", length=80, nullable=false)
     */
    private $formalname;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=30, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="sub_type", type="string", length=50, nullable=true)
     */
    private $subType;

    /**
     * @var string
     *
     * @ORM\Column(name="sovereignty", type="string", length=255, nullable=true)
     */
    private $sovereignty;

    /**
     * @var string
     *
     * @ORM\Column(name="capital", type="string", length=255, nullable=true)
     */
    private $capital;

    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=3, nullable=true)
     */
    private $currency;

    /**
     * @var string
     *
     * @ORM\Column(name="iso_code_2_letters", type="string", length=2, nullable=true)
     */
    private $isoCode2Letters;

    /**
     * @var string
     *
     * @ORM\Column(name="iso_code_3_letters", type="string", length=3, nullable=true)
     */
    private $isoCode3Letters;

    /**
     * @var int
     *
     * @ORM\Column(name="iso_code_numbers", type="integer", nullable=true)
     */
    private $isoCodeNumbers;

    /**
     * @var string
     *
     * @ORM\Column(name="tld", type="string", length=255, nullable=true)
     */
    private $tld;

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
    public function getFormalname()
    {
        return $this->formalname;
    }

    /**
     * @param string $formalname
     *
     * @return $this
     */
    public function setFormalname($formalname)
    {
        $this->formalname = $formalname;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubType()
    {
        return $this->subType;
    }

    /**
     * @param string $subType
     *
     * @return $this
     */
    public function setSubType($subType)
    {
        $this->subType = $subType;

        return $this;
    }

    /**
     * @return string
     */
    public function getSovereignty()
    {
        return $this->sovereignty;
    }

    /**
     * @param string $sovereignty
     *
     * @return $this
     */
    public function setSovereignty($sovereignty)
    {
        $this->sovereignty = $sovereignty;

        return $this;
    }

    /**
     * @return string
     */
    public function getCapital()
    {
        return $this->capital;
    }

    /**
     * @param string $capital
     *
     * @return $this
     */
    public function setCapital($capital)
    {
        $this->capital = $capital;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsoCode2Letters()
    {
        return $this->isoCode2Letters;
    }

    /**
     * @param string $isoCode2Letters
     *
     * @return $this
     */
    public function setIsoCode2Letters($isoCode2Letters)
    {
        $this->isoCode2Letters = $isoCode2Letters;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsoCode3Letters()
    {
        return $this->isoCode3Letters;
    }

    /**
     * @param string $isoCode3Letters
     *
     * @return $this
     */
    public function setIsoCode3Letters($isoCode3Letters)
    {
        $this->isoCode3Letters = $isoCode3Letters;

        return $this;
    }

    /**
     * @return int
     */
    public function getIsoCodeNumbers()
    {
        return $this->isoCodeNumbers;
    }

    /**
     * @param int $isoCodeNumbers
     *
     * @return $this
     */
    public function setIsoCodeNumbers($isoCodeNumbers)
    {
        $this->isoCodeNumbers = $isoCodeNumbers;

        return $this;
    }

    /**
     * @return string
     */
    public function getTld()
    {
        return $this->tld;
    }

    /**
     * @param string $tld
     *
     * @return $this
     */
    public function setTld($tld)
    {
        $this->tld = $tld;

        return $this;
    }
}
