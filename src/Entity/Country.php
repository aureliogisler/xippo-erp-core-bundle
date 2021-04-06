<?php

namespace Xippogmbh\XippoErpCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Country
 *
 * @ORM\Table(name="Countrys", indexes={@ORM\Index(name="IDX_46FA1AF9D490A9DD", columns={"textFID"})})
 * @ORM\Entity
 */
class Country
{
    /**
     * @var int
     *
     * @ORM\Column(name="countryID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $countryID;

    /**
     * @var string
     *
     * @ORM\Column(name="countryISO", type="string", length=2, nullable=false)
     */
    private $countryISO;

    /**
     * @var string|null
     *
     * @ORM\Column(name="flag", type="blob", nullable=true)
     */
    private $flag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ibanFormat", type="string", length=40, nullable=true)
     */
    private $ibanFormat;

    /**
     * @var bool
     *
     * @ORM\Column(name="isEUCountry", type="boolean", nullable=false)
     */
    private $isEUCountry = '0';

    /**
     * @var \Text
     *
     * @ORM\ManyToOne(targetEntity="Text")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="textFID", referencedColumnName="textID")
     * })
     */
    private $textFID;

    public function getCountryID(): ?int
    {
        return $this->countryID;
    }

    public function getCountryISO(): ?string
    {
        return $this->countryISO;
    }

    public function setCountryISO(string $countryISO): self
    {
        $this->countryISO = $countryISO;

        return $this;
    }

    public function getFlag()
    {
        return $this->flag;
    }

    public function setFlag($flag): self
    {
        $this->flag = $flag;

        return $this;
    }

    public function getIbanFormat(): ?string
    {
        return $this->ibanFormat;
    }

    public function setIbanFormat(?string $ibanFormat): self
    {
        $this->ibanFormat = $ibanFormat;

        return $this;
    }

    public function getIsEUCountry(): ?bool
    {
        return $this->isEUCountry;
    }

    public function setIsEUCountry(bool $isEUCountry): self
    {
        $this->isEUCountry = $isEUCountry;

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
