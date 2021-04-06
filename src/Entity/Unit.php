<?php

namespace Xippogmbh\XippoErpCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Unit
 *
 * @ORM\Table(name="Units", indexes={@ORM\Index(name="IDX_28715B4DD490A9DD", columns={"textFID"})})
 * @ORM\Entity
 */
class Unit
{
    /**
     * @var int
     *
     * @ORM\Column(name="unitID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $unitID;

    /**
     * @var string
     *
     * @ORM\Column(name="acronym", type="string", length=10, nullable=false)
     */
    private $acronym = '';

    /**
     * @var int
     *
     * @ORM\Column(name="decimalPlaces", type="integer", nullable=false)
     */
    private $decimalPlaces;

    /**
     * @var bool
     *
     * @ORM\Column(name="isCycleUnit", type="boolean", nullable=false)
     */
    private $isCycleUnit;

    /**
     * @var bool
     *
     * @ORM\Column(name="isHireUnit", type="boolean", nullable=false)
     */
    private $isHireUnit;

    /**
     * @var bool
     *
     * @ORM\Column(name="isPackingUnit", type="boolean", nullable=false)
     */
    private $isPackingUnit;

    /**
     * @var bool
     *
     * @ORM\Column(name="isRateUnit", type="boolean", nullable=false)
     */
    private $isRateUnit;

    /**
     * @var bool
     *
     * @ORM\Column(name="isWeightUnit", type="boolean", nullable=false)
     */
    private $isWeightUnit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parentFactor", type="decimal", precision=12, scale=5, nullable=true)
     */
    private $parentFactor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="parentUnitFID", type="integer", nullable=true)
     */
    private $parentUnitFID;

    /**
     * @var \Text
     *
     * @ORM\ManyToOne(targetEntity="Text")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="textFID", referencedColumnName="textID")
     * })
     */
    private $textFID;

    public function getUnitID(): ?int
    {
        return $this->unitID;
    }

    public function getAcronym(): ?string
    {
        return $this->acronym;
    }

    public function setAcronym(string $acronym): self
    {
        $this->acronym = $acronym;

        return $this;
    }

    public function getDecimalPlaces(): ?int
    {
        return $this->decimalPlaces;
    }

    public function setDecimalPlaces(int $decimalPlaces): self
    {
        $this->decimalPlaces = $decimalPlaces;

        return $this;
    }

    public function getIsCycleUnit(): ?bool
    {
        return $this->isCycleUnit;
    }

    public function setIsCycleUnit(bool $isCycleUnit): self
    {
        $this->isCycleUnit = $isCycleUnit;

        return $this;
    }

    public function getIsHireUnit(): ?bool
    {
        return $this->isHireUnit;
    }

    public function setIsHireUnit(bool $isHireUnit): self
    {
        $this->isHireUnit = $isHireUnit;

        return $this;
    }

    public function getIsPackingUnit(): ?bool
    {
        return $this->isPackingUnit;
    }

    public function setIsPackingUnit(bool $isPackingUnit): self
    {
        $this->isPackingUnit = $isPackingUnit;

        return $this;
    }

    public function getIsRateUnit(): ?bool
    {
        return $this->isRateUnit;
    }

    public function setIsRateUnit(bool $isRateUnit): self
    {
        $this->isRateUnit = $isRateUnit;

        return $this;
    }

    public function getIsWeightUnit(): ?bool
    {
        return $this->isWeightUnit;
    }

    public function setIsWeightUnit(bool $isWeightUnit): self
    {
        $this->isWeightUnit = $isWeightUnit;

        return $this;
    }

    public function getParentFactor(): ?string
    {
        return $this->parentFactor;
    }

    public function setParentFactor(?string $parentFactor): self
    {
        $this->parentFactor = $parentFactor;

        return $this;
    }

    public function getParentUnitFID(): ?int
    {
        return $this->parentUnitFID;
    }

    public function setParentUnitFID(?int $parentUnitFID): self
    {
        $this->parentUnitFID = $parentUnitFID;

        return $this;
    }

    public function getTextFID(): ?Text
    {
        return $this->textFID;
    }

    public function setTextFID(?Text $textFID): self
    {
        $this->textFID = $textFID;

        return $this;
    }
    
}
