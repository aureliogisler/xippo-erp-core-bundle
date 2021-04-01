<?php

namespace Xippogmbh\XippoErpCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Texts
 *
 * @ORM\Table(name="Texts", indexes={@ORM\Index(name="IDX_DFF43CBB3FEC2661", columns={"languageFID"})})
 * @ORM\Entity
 */
class Texts
{
    /**
     * @var int
     *
     * @ORM\Column(name="textID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $textid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="longText", type="string", length=0, nullable=true)
     */
    private $longtext;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text", type="string", length=60, nullable=true)
     */
    private $text;

    /**
     * @var \Languages
     *
     * @ORM\ManyToOne(targetEntity="Languages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="languageFID", referencedColumnName="languageID")
     * })
     */
    private $languagefid;


}
