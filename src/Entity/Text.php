<?php

namespace Xippogmbh\XippoErpCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Text
 *
 * @ORM\Table(name="Texts", indexes={@ORM\Index(name="IDX_DFF43CBB3FEC2661", columns={"languageFID"})})
 * @ORM\Entity
 */
class Text
{
    /**
     * @var int
     *
     * @ORM\Column(name="textID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $textID;

    /**
     * @var string|null
     *
     * @ORM\Column(name="longText", type="string", length=0, nullable=true)
     */
    private $longText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text", type="string", length=60, nullable=true)
     */
    private $text;

    /**
     * @var \Language
     *
     * @ORM\ManyToOne(targetEntity="Language")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="languageFID", referencedColumnName="languageID")
     * })
     */
    private $languageFID;

    public function getTextID(): ?int
    {
        return $this->textID;
    }

    public function getLongText(): ?string
    {
        return $this->longText;
    }

    public function setLongText(?string $longText): self
    {
        $this->longText = $longText;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getLanguageFID(): ?Language
    {
        return $this->languageFID;
    }

    public function setLanguageFID(?Language $languageFID): self
    {
        $this->languageFID = $languageFID;

        return $this;
    }
    
}
