<?php

namespace Xippogmbh\XippoErpCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Addresstypes
 *
 * @ORM\Table(name="AddressTypes", indexes={@ORM\Index(name="IDX_A0A9DD3CD490A9DD", columns={"textFID"})})
 * @ORM\Entity
 */
class Addresstypes
{
    /**
     * @var int
     *
     * @ORM\Column(name="addressTypeID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $addresstypeid;

    /**
     * @var bool
     *
     * @ORM\Column(name="isBillAddress", type="boolean", nullable=false)
     */
    private $isbilladdress = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="isDebtor", type="boolean", nullable=false)
     */
    private $isdebtor = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="isDefault", type="boolean", nullable=false)
     */
    private $isdefault = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="isDeliveryAddress", type="boolean", nullable=false)
     */
    private $isdeliveryaddress = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="isContactPerson", type="boolean", nullable=false)
     */
    private $iscontactperson = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="isCreditor", type="boolean", nullable=false)
     */
    private $iscreditor = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="isControlAddress", type="boolean", nullable=false)
     */
    private $iscontroladdress = '0';

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
