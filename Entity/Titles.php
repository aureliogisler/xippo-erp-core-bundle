<?php

namespace Xippogmbh\XippoErpCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Titles
 *
 * @ORM\Table(name="Titles")
 * @ORM\Entity
 */
class Titles
{
    /**
     * @var int
     *
     * @ORM\Column(name="titleID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $titleid;

    /**
     * @var string
     *
     * @ORM\Column(name="shortString", type="string", length=10, nullable=false)
     */
    private $shortstring;

    /**
     * @var string
     *
     * @ORM\Column(name="longString", type="string", length=128, nullable=false)
     */
    private $longstring;


}
