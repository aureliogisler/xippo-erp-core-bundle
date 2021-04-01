<?php

namespace Xippogmbh\XippoErpCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formattypes
 *
 * @ORM\Table(name="FormatTypes", indexes={@ORM\Index(name="IDX_38C3A2BD490A9DD", columns={"textFID"})})
 * @ORM\Entity
 */
class Formattypes
{
    /**
     * @var int
     *
     * @ORM\Column(name="formatTypeID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $formattypeid;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255, nullable=false)
     */
    private $link = '';

    /**
     * @var \Texts
     *
     * @ORM\ManyToOne(targetEntity="Texts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="textFID", referencedColumnName="textID")
     * })
     */
    private $textfid;


}
