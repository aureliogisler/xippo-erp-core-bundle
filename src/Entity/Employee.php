<?php

namespace Xippogmbh\XippoErpCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employee
 *
 * @ORM\Table(name="Employees", uniqueConstraints={@ORM\UniqueConstraint(name="IX_EmployeesUserName", columns={"userName"})}, indexes={@ORM\Index(name="IDX_387341A385391DE3", columns={"currencyFID"}), @ORM\Index(name="IDX_387341A3D1D903EC", columns={"rateUnitFID"}), @ORM\Index(name="IDX_387341A369BA2137", columns={"subsidiaryFID"}), @ORM\Index(name="IDX_387341A33FEC2661", columns={"languageFID"}), @ORM\Index(name="IDX_387341A348AA33E0", columns={"addressFID"})})
 * @ORM\Entity
 */
class Employee
{
    /**
     * @var int
     *
     * @ORM\Column(name="employeeID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $employeeID;

    /**
     * @var bool
     *
     * @ORM\Column(name="canLogin", type="boolean", nullable=false)
     */
    private $canLogin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createDate", type="datetime", nullable=false)
     */
    private $createDate;

    /**
     * @var string
     *
     * @ORM\Column(name="createUser", type="string", length=60, nullable=false)
     */
    private $createUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="exchangeUser", type="string", length=255, nullable=true)
     */
    private $exchangeUser;

    /**
     * @var bool
     *
     * @ORM\Column(name="hasCalendar", type="boolean", nullable=false)
     */
    private $hasCalendar;

    /**
     * @var bool
     *
     * @ORM\Column(name="hasLDAP", type="boolean", nullable=false)
     */
    private $hasLDAP;

    /**
     * @var string|null
     *
     * @ORM\Column(name="holidays", type="decimal", precision=18, scale=2, nullable=true)
     */
    private $holidays;

    /**
     * @var bool
     *
     * @ORM\Column(name="isActive", type="boolean", nullable=false)
     */
    private $isActive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modifyDate", type="datetime", nullable=false)
     */
    private $modifyDate;

    /**
     * @var string
     *
     * @ORM\Column(name="modifyUser", type="string", length=60, nullable=false)
     */
    private $modifyUser;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rate", type="integer", nullable=true)
     */
    private $rate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="salery", type="integer", nullable=true)
     */
    private $salery;

    /**
     * @var string
     *
     * @ORM\Column(name="userName", type="string", length=255, nullable=false)
     */
    private $userName;

    /**
     * @var \Currency
     *
     * @ORM\ManyToOne(targetEntity="Currency")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="currencyFID", referencedColumnName="currencyID")
     * })
     */
    private $currencyFID;

    /**
     * @var \Unit
     *
     * @ORM\ManyToOne(targetEntity="Unit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rateUnitFID", referencedColumnName="unitID")
     * })
     */
    private $rateUnitFID;

    /**
     * @var \Subsidiary
     *
     * @ORM\ManyToOne(targetEntity="Subsidiary")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="subsidiaryFID", referencedColumnName="subsidiaryID")
     * })
     */
    private $subsidiaryFID;

    /**
     * @var \Language
     *
     * @ORM\ManyToOne(targetEntity="Language")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="languageFID", referencedColumnName="languageID")
     * })
     */
    private $languageFID;

    /**
     * @var \Address
     *
     * @ORM\ManyToOne(targetEntity="Address")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="addressFID", referencedColumnName="addressID")
     * })
     */
    private $addressFID;

    public function getEmployeeID(): ?int
    {
        return $this->employeeID;
    }

    public function getCanLogin(): ?bool
    {
        return $this->canLogin;
    }

    public function setCanLogin(bool $canLogin): self
    {
        $this->canLogin = $canLogin;

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

    public function getExchangeUser(): ?string
    {
        return $this->exchangeUser;
    }

    public function setExchangeUser(?string $exchangeUser): self
    {
        $this->exchangeUser = $exchangeUser;

        return $this;
    }

    public function getHasCalendar(): ?bool
    {
        return $this->hasCalendar;
    }

    public function setHasCalendar(bool $hasCalendar): self
    {
        $this->hasCalendar = $hasCalendar;

        return $this;
    }

    public function getHasLDAP(): ?bool
    {
        return $this->hasLDAP;
    }

    public function setHasLDAP(bool $hasLDAP): self
    {
        $this->hasLDAP = $hasLDAP;

        return $this;
    }

    public function getHolidays(): ?string
    {
        return $this->holidays;
    }

    public function setHolidays(?string $holidays): self
    {
        $this->holidays = $holidays;

        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

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

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getRate(): ?int
    {
        return $this->rate;
    }

    public function setRate(?int $rate): self
    {
        $this->rate = $rate;

        return $this;
    }

    public function getSalery(): ?int
    {
        return $this->salery;
    }

    public function setSalery(?int $salery): self
    {
        $this->salery = $salery;

        return $this;
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(string $userName): self
    {
        $this->userName = $userName;

        return $this;
    }

    public function getCurrencyFID(): ?Currency
    {
        return $this->currencyFID;
    }

    public function setCurrencyFID(?Currency $currencyFID): self
    {
        $this->currencyFID = $currencyFID;

        return $this;
    }

    public function getRateUnitFID(): ?Unit
    {
        return $this->rateUnitFID;
    }

    public function setRateUnitFID(?Unit $rateUnitFID): self
    {
        $this->rateUnitFID = $rateUnitFID;

        return $this;
    }

    public function getSubsidiaryFID(): ?Subsidiary
    {
        return $this->subsidiaryFID;
    }

    public function setSubsidiaryFID(?Subsidiary $subsidiaryFID): self
    {
        $this->subsidiaryFID = $subsidiaryFID;

        return $this;
    }

    public function getLanguageFID(): ?Language
    {
        return $this->languageFID;
    }

    public function setLanguageFID(?Language $languageFID): self
    {
        $this->languageFID = $languageFID;

        return $this;
    }

    public function getAddressFID(): ?Address
    {
        return $this->addressFID;
    }

    public function setAddressFID(?Address $addressFID): self
    {
        $this->addressFID = $addressFID;

        return $this;
    }
    
}
