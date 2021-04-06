<?php

namespace Xippogmbh\XippoErpCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subsidiary
 *
 * @ORM\Table(name="Subsidiarys", indexes={@ORM\Index(name="IDX_3086E46348AA33E0", columns={"addressFID"})})
 * @ORM\Entity
 */
class Subsidiary
{
    /**
     * @var int
     *
     * @ORM\Column(name="subsidiaryID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $subsidiaryID;

    /**
     * @var \Address
     *
     * @ORM\ManyToOne(targetEntity="Address")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="addressFID", referencedColumnName="addressID")
     * })
     */
    private $addressFID;

    public function getSubsidiaryID(): ?int
    {
        return $this->subsidiaryID;
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
