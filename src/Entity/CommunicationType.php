<?php

namespace Xippogmbh\XippoErpCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommunicationType
 *
 * @ORM\Table(name="CommunicationTypes", indexes={@ORM\Index(name="IDX_A74516CB307128E3", columns={"formatTypeFID"}), @ORM\Index(name="IDX_A74516CBD490A9DD", columns={"textFID"})})
 * @ORM\Entity
 */
class CommunicationType
{
    /**
     * @var int
     *
     * @ORM\Column(name="communicationTypeID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $communicationTypeID;

    /**
     * @var string|null
     *
     * @ORM\Column(name="icon", type="blob", nullable=true)
     */
    private $icon;

    /**
     * @var \FormatType
     *
     * @ORM\ManyToOne(targetEntity="FormatType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="formatTypeFID", referencedColumnName="formatTypeID")
     * })
     */
    private $formatTypeFID;

    /**
     * @var \Text
     *
     * @ORM\ManyToOne(targetEntity="Text")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="textFID", referencedColumnName="textID")
     * })
     */
    private $textFID;

    public function getCommunicationTypeID(): ?int
    {
        return $this->communicationTypeID;
    }

    public function getIcon()
    {
        return $this->icon;
    }

    public function setIcon($icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getFormatTypeFID(): ?FormatType
    {
        return $this->formatTypeFID;
    }

    public function setFormatTypeFID(?FormatType $formatTypeFID): self
    {
        $this->formatTypeFID = $formatTypeFID;

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
