<?php

namespace Xippogmbh\XippoErpCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Units
 *
 * @ORM\Table(name="Units", indexes={@ORM\Index(name="IDX_28715B4DD490A9DD", columns={"textFID"})})
 * @ORM\Entity
 */
class Units
{
    /**
     * @var int
     *
     * @ORM\Column(name="unitID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $unitid;

    /**
     * @var string
     *
     * @ORM\Column(name="acronym", type="string", length=10, nullable=false)
     */
    private $acronym = '';

    /**
     * @var int
     *
     * @ORM\Column(name="decimalPlaces", type="integer", nullable=false)
     */
    private $decimalplaces;

    /**
     * @var bool
     *
     * @ORM\Column(name="isCycleUnit", type="boolean", nullable=false)
     */
    private $iscycleunit;

    /**
     * @var bool
     *
     * @ORM\Column(name="isHireUnit", type="boolean", nullable=false)
     */
    private $ishireunit;

    /**
     * @var bool
     *
     * @ORM\Column(name="isPackingUnit", type="boolean", nullable=false)
     */
    private $ispackingunit;

    /**
     * @var bool
     *
     * @ORM\Column(name="isRateUnit", type="boolean", nullable=false)
     */
    private $israteunit;

    /**
     * @var bool
     *
     * @ORM\Column(name="isWeightUnit", type="boolean", nullable=false)
     */
    private $isweightunit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parentFactor", type="decimal", precision=12, scale=5, nullable=true)
     */
    private $parentfactor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="parentUnitFID", type="integer", nullable=true)
     */
    private $parentunitfid;

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
