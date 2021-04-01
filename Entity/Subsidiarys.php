<?php

namespace Xippogmbh\XippoErpCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subsidiarys
 *
 * @ORM\Table(name="Subsidiarys", indexes={@ORM\Index(name="IDX_3086E46348AA33E0", columns={"addressFID"})})
 * @ORM\Entity
 */
class Subsidiarys
{
    /**
     * @var int
     *
     * @ORM\Column(name="subsidiaryID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $subsidiaryid;

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
