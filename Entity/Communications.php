<?php

namespace Xippogmbh\XippoErpCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Communications
 *
 * @ORM\Table(name="Communications", indexes={@ORM\Index(name="IDX_E14B2396F55508DB", columns={"communicationTypeFID"}), @ORM\Index(name="IDX_E14B239648AA33E0", columns={"addressFID"})})
 * @ORM\Entity
 */
class Communications
{
    /**
     * @var int
     *
     * @ORM\Column(name="communicationID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $communicationid;

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
    private $isprivate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="shortComment", type="string", length=4000, nullable=true)
     */
    private $shortcomment = '';

    /**
     * @var int
     *
     * @ORM\Column(name="sort", type="integer", nullable=false)
     */
    private $sort = '0';

    /**
     * @var \Communicationtypes
     *
     * @ORM\ManyToOne(targetEntity="Communicationtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="communicationTypeFID", referencedColumnName="communicationTypeID")
     * })
     */
    private $communicationtypefid;

    /**
     * @var \Addresses
     *
     * @ORM\ManyToOne(targetEntity="Addresses")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="addressFID", referencedColumnName="addressID")
     * })
     */
    private $addressfid;


}
