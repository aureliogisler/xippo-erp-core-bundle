<?php

namespace Xippogmbh\XippoErpCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Communicationtypes
 *
 * @ORM\Table(name="CommunicationTypes", indexes={@ORM\Index(name="IDX_A74516CB307128E3", columns={"formatTypeFID"}), @ORM\Index(name="IDX_A74516CBD490A9DD", columns={"textFID"})})
 * @ORM\Entity
 */
class Communicationtypes
{
    /**
     * @var int
     *
     * @ORM\Column(name="communicationTypeID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $communicationtypeid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="icon", type="blob", nullable=true)
     */
    private $icon;

    /**
     * @var \Formattypes
     *
     * @ORM\ManyToOne(targetEntity="Formattypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="formatTypeFID", referencedColumnName="formatTypeID")
     * })
     */
    private $formattypefid;

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
