<?php

namespace Xippogmbh\XippoErpCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Countrys
 *
 * @ORM\Table(name="Countrys", indexes={@ORM\Index(name="IDX_46FA1AF9D490A9DD", columns={"textFID"})})
 * @ORM\Entity
 */
class Countrys
{
    /**
     * @var int
     *
     * @ORM\Column(name="countryID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $countryid;

    /**
     * @var string
     *
     * @ORM\Column(name="countryISO", type="string", length=2, nullable=false)
     */
    private $countryiso;

    /**
     * @var string|null
     *
     * @ORM\Column(name="flag", type="blob", nullable=true)
     */
    private $flag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ibanFormat", type="string", length=40, nullable=true)
     */
    private $ibanformat;

    /**
     * @var bool
     *
     * @ORM\Column(name="isEUCountry", type="boolean", nullable=false)
     */
    private $iseucountry = '0';

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
