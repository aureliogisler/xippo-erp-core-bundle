<?php

namespace Xippogmbh\XippoErpCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salutations
 *
 * @ORM\Table(name="Salutations")
 * @ORM\Entity
 */
class Salutations
{
    /**
     * @var int
     *
     * @ORM\Column(name="salutationID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $salutationid;

    /**
     * @var string
     *
     * @ORM\Column(name="addressSalutation", type="string", length=60, nullable=false)
     */
    private $addresssalutation = '';

    /**
     * @var string
     *
     * @ORM\Column(name="addressSalutationReplace", type="string", length=128, nullable=false)
     */
    private $addresssalutationreplace = '';

    /**
     * @var string
     *
     * @ORM\Column(name="letterSalutation", type="string", length=60, nullable=false)
     */
    private $lettersalutation = '';

    /**
     * @var string
     *
     * @ORM\Column(name="letterSalutationReplace", type="string", length=128, nullable=false)
     */
    private $lettersalutationreplace = '';


}
