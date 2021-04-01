<?php

namespace Xippogmbh\XippoErpCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Languages
 *
 * @ORM\Table(name="Languages")
 * @ORM\Entity
 */
class Languages
{
    /**
     * @var int
     *
     * @ORM\Column(name="languageID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $languageid;

    /**
     * @var string
     *
     * @ORM\Column(name="langISOlong", type="string", length=5, nullable=false)
     */
    private $langisolong;

    /**
     * @var string
     *
     * @ORM\Column(name="langISOshort", type="string", length=2, nullable=false)
     */
    private $langisoshort;


}
