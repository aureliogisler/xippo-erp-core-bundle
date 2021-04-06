<?php

namespace Xippogmbh\XippoErpCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salutation
 *
 * @ORM\Table(name="Salutations")
 * @ORM\Entity
 */
class Salutation
{
    /**
     * @var int
     *
     * @ORM\Column(name="salutationID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $salutationID;

    /**
     * @var string
     *
     * @ORM\Column(name="addressSalutation", type="string", length=60, nullable=false)
     */
    private $addressSalutation = '';

    /**
     * @var string
     *
     * @ORM\Column(name="addressSalutationReplace", type="string", length=128, nullable=false)
     */
    private $addressSalutationReplace = '';

    /**
     * @var string
     *
     * @ORM\Column(name="letterSalutation", type="string", length=60, nullable=false)
     */
    private $letterSalutation = '';

    /**
     * @var string
     *
     * @ORM\Column(name="letterSalutationReplace", type="string", length=128, nullable=false)
     */
    private $letterSalutationReplace = '';

    public function getSalutationID(): ?int
    {
        return $this->salutationID;
    }

    public function getAddressSalutation(): ?string
    {
        return $this->addressSalutation;
    }

    public function setAddressSalutation(string $addressSalutation): self
    {
        $this->addressSalutation = $addressSalutation;

        return $this;
    }

    public function getAddressSalutationReplace(): ?string
    {
        return $this->addressSalutationReplace;
    }

    public function setAddressSalutationReplace(string $addressSalutationReplace): self
    {
        $this->addressSalutationReplace = $addressSalutationReplace;

        return $this;
    }

    public function getLetterSalutation(): ?string
    {
        return $this->letterSalutation;
    }

    public function setLetterSalutation(string $letterSalutation): self
    {
        $this->letterSalutation = $letterSalutation;

        return $this;
    }

    public function getLetterSalutationReplace(): ?string
    {
        return $this->letterSalutationReplace;
    }

    public function setLetterSalutationReplace(string $letterSalutationReplace): self
    {
        $this->letterSalutationReplace = $letterSalutationReplace;

        return $this;
    }
    
}
