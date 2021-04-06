<?php

namespace Xippogmbh\XippoErpCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Currency
 *
 * @ORM\Table(name="Currencys", indexes={@ORM\Index(name="IDX_2FF0361D82B16694", columns={"currencyLinkFID"}), @ORM\Index(name="IDX_2FF0361DD490A9DD", columns={"textFID"})})
 * @ORM\Entity
 */
class Currency
{
    /**
     * @var int
     *
     * @ORM\Column(name="currencyID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $currencyID;

    /**
     * @var string
     *
     * @ORM\Column(name="isoCode", type="string", length=5, nullable=false)
     */
    private $isoCode;

    /**
     * @var string
     *
     * @ORM\Column(name="round", type="decimal", precision=18, scale=2, nullable=false)
     */
    private $round;

    /**
     * @var string
     *
     * @ORM\Column(name="tolerance", type="decimal", precision=18, scale=2, nullable=false)
     */
    private $tolerance;

    /**
     * @var \Currency
     *
     * @ORM\ManyToOne(targetEntity="Currency")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="currencyLinkFID", referencedColumnName="currencyID")
     * })
     */
    private $currencyLinkFID;

    /**
     * @var \Text
     *
     * @ORM\ManyToOne(targetEntity="Text")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="textFID", referencedColumnName="textID")
     * })
     */
    private $textFID;

    public function getCurrencyID(): ?int
    {
        return $this->currencyID;
    }

    public function getIsoCode(): ?string
    {
        return $this->isoCode;
    }

    public function setIsoCode(string $isoCode): self
    {
        $this->isoCode = $isoCode;

        return $this;
    }

    public function getRound(): ?string
    {
        return $this->round;
    }

    public function setRound(string $round): self
    {
        $this->round = $round;

        return $this;
    }

    public function getTolerance(): ?string
    {
        return $this->tolerance;
    }

    public function setTolerance(string $tolerance): self
    {
        $this->tolerance = $tolerance;

        return $this;
    }

    public function getCurrencyLinkFID(): ?self
    {
        return $this->currencyLinkFID;
    }

    public function setCurrencyLinkFID(?self $currencyLinkFID): self
    {
        $this->currencyLinkFID = $currencyLinkFID;

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
