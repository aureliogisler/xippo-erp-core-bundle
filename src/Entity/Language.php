<?php

namespace Xippogmbh\XippoErpCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Language
 *
 * @ORM\Table(name="Languages")
 * @ORM\Entity
 */
class Language
{
    /**
     * @var int
     *
     * @ORM\Column(name="languageID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $languageID;

    /**
     * @var string
     *
     * @ORM\Column(name="langISOlong", type="string", length=5, nullable=false)
     */
    private $langISOlong;

    /**
     * @var string
     *
     * @ORM\Column(name="langISOshort", type="string", length=2, nullable=false)
     */
    private $langISOshort;

    public function getLanguageID(): ?int
    {
        return $this->languageID;
    }

    public function getLangISOlong(): ?string
    {
        return $this->langISOlong;
    }

    public function setLangISOlong(string $langISOlong): self
    {
        $this->langISOlong = $langISOlong;

        return $this;
    }

    public function getLangISOshort(): ?string
    {
        return $this->langISOshort;
    }

    public function setLangISOshort(string $langISOshort): self
    {
        $this->langISOshort = $langISOshort;

        return $this;
    }
    
}
