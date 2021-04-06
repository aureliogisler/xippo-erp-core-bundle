<?php

namespace Xippogmbh\XippoErpCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Title
 *
 * @ORM\Table(name="Titles")
 * @ORM\Entity
 */
class Title
{
    /**
     * @var int
     *
     * @ORM\Column(name="titleID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $titleID;

    /**
     * @var string
     *
     * @ORM\Column(name="shortString", type="string", length=10, nullable=false)
     */
    private $shortString;

    /**
     * @var string
     *
     * @ORM\Column(name="longString", type="string", length=128, nullable=false)
     */
    private $longString;

    public function getTitleID(): ?int
    {
        return $this->titleID;
    }

    public function getShortString(): ?string
    {
        return $this->shortString;
    }

    public function setShortString(string $shortString): self
    {
        $this->shortString = $shortString;

        return $this;
    }

    public function getLongString(): ?string
    {
        return $this->longString;
    }

    public function setLongString(string $longString): self
    {
        $this->longString = $longString;

        return $this;
    }
    
}
