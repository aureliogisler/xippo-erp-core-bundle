<?php

namespace Xippogmbh\XippoErpCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Communication
 *
 * @ORM\Table(name="Communications", indexes={@ORM\Index(name="IDX_E14B2396F55508DB", columns={"communicationTypeFID"}), @ORM\Index(name="IDX_E14B239648AA33E0", columns={"addressFID"})})
 * @ORM\Entity
 */
class Communication
{
    /**
     * @var int
     *
     * @ORM\Column(name="communicationID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $communicationID;

    /**
     * @var string
     *
     * @ORM\Column(name="communication", type="string", length=255, nullable=false)
     */
    private $communication;

    /**
     * @var bool
     *
     * @ORM\Column(name="isPrivate", type="boolean", nullable=false)
     */
    private $isPrivate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="shortComment", type="string", length=4000, nullable=true)
     */
    private $shortComment = '';

    /**
     * @var int
     *
     * @ORM\Column(name="sort", type="integer", nullable=false)
     */
    private $sort = '0';

    /**
     * @var \CommunicationType
     *
     * @ORM\ManyToOne(targetEntity="CommunicationType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="communicationTypeFID", referencedColumnName="communicationTypeID")
     * })
     */
    private $communicationTypeFID;

    /**
     * @var \Address
     *
     * @ORM\ManyToOne(targetEntity="Address")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="addressFID", referencedColumnName="addressID")
     * })
     */
    private $addressFID;

    public function getCommunicationID(): ?int
    {
        return $this->communicationID;
    }

    public function getCommunication(): ?string
    {
        return $this->communication;
    }

    public function setCommunication(string $communication): self
    {
        $this->communication = $communication;

        return $this;
    }

    public function getIsPrivate(): ?bool
    {
        return $this->isPrivate;
    }

    public function setIsPrivate(bool $isPrivate): self
    {
        $this->isPrivate = $isPrivate;

        return $this;
    }

    public function getShortComment(): ?string
    {
        return $this->shortComment;
    }

    public function setShortComment(?string $shortComment): self
    {
        $this->shortComment = $shortComment;

        return $this;
    }

    public function getSort(): ?int
    {
        return $this->sort;
    }

    public function setSort(int $sort): self
    {
        $this->sort = $sort;

        return $this;
    }

    public function getCommunicationTypeFID(): ?CommunicationType
    {
        return $this->communicationTypeFID;
    }

    public function setCommunicationTypeFID(?CommunicationType $communicationTypeFID): self
    {
        $this->communicationTypeFID = $communicationTypeFID;

        return $this;
    }

    public function getAddressFID(): ?Address
    {
        return $this->addressFID;
    }

    public function setAddressFID(?Address $addressFID): self
    {
        $this->addressFID = $addressFID;

        return $this;
    }

}
