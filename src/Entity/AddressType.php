<?php

namespace Xippogmbh\XippoErpCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AddressType
 *
 * @ORM\Table(name="AddressTypes", indexes={@ORM\Index(name="IDX_A0A9DD3CD490A9DD", columns={"textFID"})})
 * @ORM\Entity
 */
class AddressType
{
    /**
     * @var int
     *
     * @ORM\Column(name="addressTypeID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $addressTypeID;

    /**
     * @var bool
     *
     * @ORM\Column(name="isBillAddress", type="boolean", nullable=false)
     */
    private $isBillAddress = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="isDebtor", type="boolean", nullable=false)
     */
    private $isDebtor = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="isDefault", type="boolean", nullable=false)
     */
    private $isDefault = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="isDeliveryAddress", type="boolean", nullable=false)
     */
    private $isDeliveryAddress = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="isContactPerson", type="boolean", nullable=false)
     */
    private $isContactPerson = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="isCreditor", type="boolean", nullable=false)
     */
    private $isCreditor = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="isControlAddress", type="boolean", nullable=false)
     */
    private $isControlAddress = '0';

    /**
     * @var \Text
     *
     * @ORM\ManyToOne(targetEntity="Text")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="textFID", referencedColumnName="textID")
     * })
     */
    private $textFID;

    public function getAddressTypeID(): ?int
    {
        return $this->addressTypeID;
    }

    public function getIsBillAddress(): ?bool
    {
        return $this->isBillAddress;
    }

    public function setIsBillAddress(bool $isBillAddress): self
    {
        $this->isBillAddress = $isBillAddress;

        return $this;
    }

    public function getIsDebtor(): ?bool
    {
        return $this->isDebtor;
    }

    public function setIsDebtor(bool $isDebtor): self
    {
        $this->isDebtor = $isDebtor;

        return $this;
    }

    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }

    public function setIsDefault(bool $isDefault): self
    {
        $this->isDefault = $isDefault;

        return $this;
    }

    public function getIsDeliveryAddress(): ?bool
    {
        return $this->isDeliveryAddress;
    }

    public function setIsDeliveryAddress(bool $isDeliveryAddress): self
    {
        $this->isDeliveryAddress = $isDeliveryAddress;

        return $this;
    }

    public function getIsContactPerson(): ?bool
    {
        return $this->isContactPerson;
    }

    public function setIsContactPerson(bool $isContactPerson): self
    {
        $this->isContactPerson = $isContactPerson;

        return $this;
    }

    public function getIsCreditor(): ?bool
    {
        return $this->isCreditor;
    }

    public function setIsCreditor(bool $isCreditor): self
    {
        $this->isCreditor = $isCreditor;

        return $this;
    }

    public function getIsControlAddress(): ?bool
    {
        return $this->isControlAddress;
    }

    public function setIsControlAddress(bool $isControlAddress): self
    {
        $this->isControlAddress = $isControlAddress;

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
