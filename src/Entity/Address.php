<?php

namespace Xippogmbh\XippoErpCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 *
 * @ORM\Table(name="Addresses", indexes={@ORM\Index(name="IDX_ED3BF7B5B7821B28", columns={"titleFID"}), @ORM\Index(name="IDX_ED3BF7B5934744C1", columns={"salutationFID"}), @ORM\Index(name="IDX_ED3BF7B54432A2E5", columns={"countryFID"}), @ORM\Index(name="IDX_ED3BF7B575864BA6", columns={"addressTypeFID"})})
 * @ORM\Entity
 */
class Address
{
    /**
     * @var int
     *
     * @ORM\Column(name="addressID", type="integer", nullable=false, options={"comment"="ID von tAddress, Primary"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $addressID;

    /**
     * @var string|null
     *
     * @ORM\Column(name="addressSalutation", type="string", length=128, nullable=true)
     */
    private $addressSalutation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="birthday", type="date", nullable=true, options={"comment"="Geburtsdatum"})
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
    private $createDate = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="createUser", type="string", length=60, nullable=false, options={"comment"="Erstellungs Benutzer"})
     */
    private $createUser = '';

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
    private $eBillingIdentity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extReference", type="string", length=20, nullable=true, options={"comment"="Externe Referenz, z.B. von Import oder WebShop"})
     */
    private $extReference;

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
    private $isLocked = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="isTemporary", type="boolean", nullable=false, options={"comment"="Temporäre Adresse, kann gelöscht werden"})
     */
    private $isTemporary = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="letterSalutation", type="string", length=128, nullable=true)
     */
    private $letterSalutation;

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
    private $middleName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modifyDate", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP","comment"="Änderungsdatum"})
     */
    private $modifyDate = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="modifyUser", type="string", length=60, nullable=false, options={"comment"="Änderungsuser"})
     */
    private $modifyUser = '';

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
    private $poBox;

    /**
     * @var string|null
     *
     * @ORM\Column(name="poCity", type="string", length=60, nullable=true, options={"comment"="Postfach Ort"})
     */
    private $poCity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="poZip", type="string", length=10, nullable=true, options={"comment"="Postfach PLZ"})
     */
    private $poZip;

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
    private $vatNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zazNumber", type="string", length=20, nullable=true)
     */
    private $zazNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zip", type="string", length=10, nullable=true, options={"comment"="Postleitzahl"})
     */
    private $zip;

    /**
     * @var \Title
     *
     * @ORM\ManyToOne(targetEntity="Title")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="titleFID", referencedColumnName="titleID")
     * })
     */
    private $titleFID;

    /**
     * @var \Salutation
     *
     * @ORM\ManyToOne(targetEntity="Salutation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="salutationFID", referencedColumnName="salutationID")
     * })
     */
    private $salutationFID;

    /**
     * @var \Country
     *
     * @ORM\ManyToOne(targetEntity="Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="countryFID", referencedColumnName="countryID")
     * })
     */
    private $countryFID;

    /**
     * @var \AddressType
     *
     * @ORM\ManyToOne(targetEntity="AddressType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="addressTypeFID", referencedColumnName="addressTypeID")
     * })
     */
    private $addressTypeFID;

    public function getAddressID(): ?int
    {
        return $this->addressID;
    }

    public function getAddressSalutation(): ?string
    {
        return $this->addressSalutation;
    }

    public function setAddressSalutation(?string $addressSalutation): self
    {
        $this->addressSalutation = $addressSalutation;

        return $this;
    }

    public function getBirthday(): ?\DateTimeInterface
    {
        return $this->birthday;
    }

    public function setBirthday(?\DateTimeInterface $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getCreateDate(): ?\DateTimeInterface
    {
        return $this->createDate;
    }

    public function setCreateDate(\DateTimeInterface $createDate): self
    {
        $this->createDate = $createDate;

        return $this;
    }

    public function getCreateUser(): ?string
    {
        return $this->createUser;
    }

    public function setCreateUser(string $createUser): self
    {
        $this->createUser = $createUser;

        return $this;
    }

    public function getDepartment(): ?string
    {
        return $this->department;
    }

    public function setDepartment(?string $department): self
    {
        $this->department = $department;

        return $this;
    }

    public function getEBillingIdentity(): ?string
    {
        return $this->eBillingIdentity;
    }

    public function setEBillingIdentity(?string $eBillingIdentity): self
    {
        $this->eBillingIdentity = $eBillingIdentity;

        return $this;
    }

    public function getExtReference(): ?string
    {
        return $this->extReference;
    }

    public function setExtReference(?string $extReference): self
    {
        $this->extReference = $extReference;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getFlag1(): ?bool
    {
        return $this->flag1;
    }

    public function setFlag1(?bool $flag1): self
    {
        $this->flag1 = $flag1;

        return $this;
    }

    public function getFlag2(): ?bool
    {
        return $this->flag2;
    }

    public function setFlag2(?bool $flag2): self
    {
        $this->flag2 = $flag2;

        return $this;
    }

    public function getFlag3(): ?bool
    {
        return $this->flag3;
    }

    public function setFlag3(?bool $flag3): self
    {
        $this->flag3 = $flag3;

        return $this;
    }

    public function getFlag4(): ?bool
    {
        return $this->flag4;
    }

    public function setFlag4(?bool $flag4): self
    {
        $this->flag4 = $flag4;

        return $this;
    }

    public function getFlag5(): ?bool
    {
        return $this->flag5;
    }

    public function setFlag5(?bool $flag5): self
    {
        $this->flag5 = $flag5;

        return $this;
    }

    public function getFunction(): ?string
    {
        return $this->function;
    }

    public function setFunction(?string $function): self
    {
        $this->function = $function;

        return $this;
    }

    public function getInfo1(): ?string
    {
        return $this->info1;
    }

    public function setInfo1(?string $info1): self
    {
        $this->info1 = $info1;

        return $this;
    }

    public function getInfo2(): ?string
    {
        return $this->info2;
    }

    public function setInfo2(?string $info2): self
    {
        $this->info2 = $info2;

        return $this;
    }

    public function getInfo3(): ?string
    {
        return $this->info3;
    }

    public function setInfo3(?string $info3): self
    {
        $this->info3 = $info3;

        return $this;
    }

    public function getInfo4(): ?string
    {
        return $this->info4;
    }

    public function setInfo4(?string $info4): self
    {
        $this->info4 = $info4;

        return $this;
    }

    public function getInfo5(): ?string
    {
        return $this->info5;
    }

    public function setInfo5(?string $info5): self
    {
        $this->info5 = $info5;

        return $this;
    }

    public function getIsLocked(): ?bool
    {
        return $this->isLocked;
    }

    public function setIsLocked(bool $isLocked): self
    {
        $this->isLocked = $isLocked;

        return $this;
    }

    public function getIsTemporary(): ?bool
    {
        return $this->isTemporary;
    }

    public function setIsTemporary(bool $isTemporary): self
    {
        $this->isTemporary = $isTemporary;

        return $this;
    }

    public function getLetterSalutation(): ?string
    {
        return $this->letterSalutation;
    }

    public function setLetterSalutation(?string $letterSalutation): self
    {
        $this->letterSalutation = $letterSalutation;

        return $this;
    }

    public function getMatchcode(): ?string
    {
        return $this->matchcode;
    }

    public function setMatchcode(?string $matchcode): self
    {
        $this->matchcode = $matchcode;

        return $this;
    }

    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }

    public function setMiddleName(?string $middleName): self
    {
        $this->middleName = $middleName;

        return $this;
    }

    public function getModifyDate(): ?\DateTimeInterface
    {
        return $this->modifyDate;
    }

    public function setModifyDate(\DateTimeInterface $modifyDate): self
    {
        $this->modifyDate = $modifyDate;

        return $this;
    }

    public function getModifyUser(): ?string
    {
        return $this->modifyUser;
    }

    public function setModifyUser(string $modifyUser): self
    {
        $this->modifyUser = $modifyUser;

        return $this;
    }

    public function getName1(): ?string
    {
        return $this->name1;
    }

    public function setName1(string $name1): self
    {
        $this->name1 = $name1;

        return $this;
    }

    public function getName2(): ?string
    {
        return $this->name2;
    }

    public function setName2(?string $name2): self
    {
        $this->name2 = $name2;

        return $this;
    }

    public function getName3(): ?string
    {
        return $this->name3;
    }

    public function setName3(?string $name3): self
    {
        $this->name3 = $name3;

        return $this;
    }

    public function getPoBox(): ?string
    {
        return $this->poBox;
    }

    public function setPoBox(?string $poBox): self
    {
        $this->poBox = $poBox;

        return $this;
    }

    public function getPoCity(): ?string
    {
        return $this->poCity;
    }

    public function setPoCity(?string $poCity): self
    {
        $this->poCity = $poCity;

        return $this;
    }

    public function getPoZip(): ?string
    {
        return $this->poZip;
    }

    public function setPoZip(?string $poZip): self
    {
        $this->poZip = $poZip;

        return $this;
    }

    public function getStreet1(): ?string
    {
        return $this->street1;
    }

    public function setStreet1(?string $street1): self
    {
        $this->street1 = $street1;

        return $this;
    }

    public function getStreet2(): ?string
    {
        return $this->street2;
    }

    public function setStreet2(?string $street2): self
    {
        $this->street2 = $street2;

        return $this;
    }

    public function getVatNumber(): ?string
    {
        return $this->vatNumber;
    }

    public function setVatNumber(?string $vatNumber): self
    {
        $this->vatNumber = $vatNumber;

        return $this;
    }

    public function getZazNumber(): ?string
    {
        return $this->zazNumber;
    }

    public function setZazNumber(?string $zazNumber): self
    {
        $this->zazNumber = $zazNumber;

        return $this;
    }

    public function getZip(): ?string
    {
        return $this->zip;
    }

    public function setZip(?string $zip): self
    {
        $this->zip = $zip;

        return $this;
    }

    public function getTitleFID(): ?Title
    {
        return $this->titleFID;
    }

    public function setTitleFID(?Title $titleFID): self
    {
        $this->titleFID = $titleFID;

        return $this;
    }

    public function getSalutationFID(): ?Salutation
    {
        return $this->salutationFID;
    }

    public function setSalutationFID(?Salutation $salutationFID): self
    {
        $this->salutationFID = $salutationFID;

        return $this;
    }

    public function getCountryFID(): ?Country
    {
        return $this->countryFID;
    }

    public function setCountryFID(?Country $countryFID): self
    {
        $this->countryFID = $countryFID;

        return $this;
    }

    public function getAddressTypeFID(): ?AddressType
    {
        return $this->addressTypeFID;
    }

    public function setAddressTypeFID(?AddressType $addressTypeFID): self
    {
        $this->addressTypeFID = $addressTypeFID;

        return $this;
    }
    
}
