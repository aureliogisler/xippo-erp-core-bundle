<?php

namespace Xippogmbh\XippoErpCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Addresses
 *
 * @ORM\Table(name="Addresses", indexes={@ORM\Index(name="IDX_ED3BF7B5B7821B28", columns={"titleFID"}), @ORM\Index(name="IDX_ED3BF7B5934744C1", columns={"salutationFID"}), @ORM\Index(name="IDX_ED3BF7B54432A2E5", columns={"countryFID"}), @ORM\Index(name="IDX_ED3BF7B575864BA6", columns={"addressTypeFID"})})
 * @ORM\Entity
 */
class Addresses
{
    /**
     * @var int
     *
     * @ORM\Column(name="addressID", type="integer", nullable=false, options={"comment"="ID von tAddress, Primary"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $addressid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="addressSalutation", type="string", length=128, nullable=true)
     */
    private $addresssalutation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="birthDay", type="date", nullable=true, options={"comment"="Geburtsdatum"})
     */
    private $birthday;

    /**
     * @var string|null
     *
     * @ORM\Column(name="city", type="string", length=60, nullable=true, options={"comment"="Stadt"})
     */
    private $city;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createDate", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP","comment"="Erstellungdatum"})
     */
    private $createdate = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="createUser", type="string", length=60, nullable=false, options={"comment"="Erstellungs Benutzer"})
     */
    private $createuser = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="department", type="string", length=60, nullable=true)
     */
    private $department;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eBillingIdentity", type="string", length=60, nullable=true)
     */
    private $ebillingidentity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extReference", type="string", length=20, nullable=true, options={"comment"="Externe Referenz, z.B. von Import oder WebShop"})
     */
    private $extreference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="firstname", type="string", length=60, nullable=true, options={"comment"="Vorname"})
     */
    private $firstname;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="flag1", type="boolean", nullable=true, options={"comment"="Freiverwendbares Flag"})
     */
    private $flag1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="flag2", type="boolean", nullable=true, options={"comment"="Freiverwendbares Flag"})
     */
    private $flag2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="flag3", type="boolean", nullable=true, options={"comment"="Freiverwendbares Flag"})
     */
    private $flag3;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="flag4", type="boolean", nullable=true, options={"comment"="Freiverwendbares Flag"})
     */
    private $flag4;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="flag5", type="boolean", nullable=true, options={"comment"="Freiverwendbares Flag"})
     */
    private $flag5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="function", type="string", length=60, nullable=true)
     */
    private $function;

    /**
     * @var string|null
     *
     * @ORM\Column(name="info1", type="string", length=60, nullable=true, options={"comment"="Freiverwendbares Textfeld60"})
     */
    private $info1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="info2", type="string", length=60, nullable=true, options={"comment"="Freiverwendbares Textfeld60"})
     */
    private $info2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="info3", type="string", length=60, nullable=true, options={"comment"="Freiverwendbares Textfeld60"})
     */
    private $info3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="info4", type="string", length=60, nullable=true, options={"comment"="Freiverwendbares Textfeld60"})
     */
    private $info4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="info5", type="string", length=60, nullable=true, options={"comment"="Freiverwendbares Textfeld60"})
     */
    private $info5;

    /**
     * @var bool
     *
     * @ORM\Column(name="isLocked", type="boolean", nullable=false, options={"comment"="Adresse ist Gesperrt"})
     */
    private $islocked = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="isTemporary", type="boolean", nullable=false, options={"comment"="Temporäre Adresse, kann gelöscht werden"})
     */
    private $istemporary = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="letterSalutation", type="string", length=128, nullable=true)
     */
    private $lettersalutation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="matchcode", type="string", length=20, nullable=true)
     */
    private $matchcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="middleName", type="string", length=60, nullable=true, options={"comment"="mittelname"})
     */
    private $middlename;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modifyDate", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP","comment"="Änderungsdatum"})
     */
    private $modifydate = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="modifyUser", type="string", length=60, nullable=false, options={"comment"="Änderungsuser"})
     */
    private $modifyuser = '';

    /**
     * @var string
     *
     * @ORM\Column(name="name1", type="string", length=60, nullable=false, options={"comment"="Name1"})
     */
    private $name1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name2", type="string", length=60, nullable=true, options={"comment"="Name2"})
     */
    private $name2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name3", type="string", length=60, nullable=true, options={"comment"="Name3"})
     */
    private $name3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="poBox", type="string", length=60, nullable=true, options={"comment"="Postfach"})
     */
    private $pobox;

    /**
     * @var string|null
     *
     * @ORM\Column(name="poCity", type="string", length=60, nullable=true, options={"comment"="Postfach Ort"})
     */
    private $pocity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="poZip", type="string", length=10, nullable=true, options={"comment"="Postfach PLZ"})
     */
    private $pozip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="street1", type="string", length=60, nullable=true, options={"comment"="Strasse1"})
     */
    private $street1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="street2", type="string", length=60, nullable=true, options={"comment"="Strasse2"})
     */
    private $street2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vatNumber", type="string", length=60, nullable=true, options={"comment"="MWST-Nummer"})
     */
    private $vatnumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zazNumber", type="string", length=20, nullable=true)
     */
    private $zaznumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zip", type="string", length=10, nullable=true, options={"comment"="Postleitzahl"})
     */
    private $zip;

    /**
     * @var \Titles
     *
     * @ORM\ManyToOne(targetEntity="Titles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="titleFID", referencedColumnName="titleID")
     * })
     */
    private $titlefid;

    /**
     * @var \Salutations
     *
     * @ORM\ManyToOne(targetEntity="Salutations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="salutationFID", referencedColumnName="salutationID")
     * })
     */
    private $salutationfid;

    /**
     * @var \Countrys
     *
     * @ORM\ManyToOne(targetEntity="Countrys")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="countryFID", referencedColumnName="countryID")
     * })
     */
    private $countryfid;

    /**
     * @var \Addresstypes
     *
     * @ORM\ManyToOne(targetEntity="Addresstypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="addressTypeFID", referencedColumnName="addressTypeID")
     * })
     */
    private $addresstypefid;


}
