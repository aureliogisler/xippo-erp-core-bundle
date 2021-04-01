<?php

namespace Xippogmbh\XippoErpCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Currencys
 *
 * @ORM\Table(name="Currencys", indexes={@ORM\Index(name="IDX_2FF0361D82B16694", columns={"currencyLinkFID"}), @ORM\Index(name="IDX_2FF0361DD490A9DD", columns={"textFID"})})
 * @ORM\Entity
 */
class Currencys
{
    /**
     * @var int
     *
     * @ORM\Column(name="currencyID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $currencyid;

    /**
     * @var string
     *
     * @ORM\Column(name="isoCode", type="string", length=5, nullable=false)
     */
    private $isocode;

    /**
     * @var string
     *
     * @ORM\Column(name="round", type="decimal", precision=18, scale=2, nullable=false)
     */
    private $round;

    /**
     * @var string
     *
     * @ORM\Column(name="tolerance", type="decimal", precision=18, scale=2, nullable=false)
     */
    private $tolerance;

    /**
     * @var \Currencys
     *
     * @ORM\ManyToOne(targetEntity="Currencys")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="currencyLinkFID", referencedColumnName="currencyID")
     * })
     */
    private $currencylinkfid;

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
