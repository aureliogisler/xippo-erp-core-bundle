<?php

namespace Xippogmbh\XippoErpCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employees
 *
 * @ORM\Table(name="Employees", uniqueConstraints={@ORM\UniqueConstraint(name="IX_EmployeesUserName", columns={"userName"})}, indexes={@ORM\Index(name="IDX_387341A385391DE3", columns={"currencyFID"}), @ORM\Index(name="IDX_387341A3D1D903EC", columns={"rateUnitFID"}), @ORM\Index(name="IDX_387341A369BA2137", columns={"subsidiaryFID"}), @ORM\Index(name="IDX_387341A33FEC2661", columns={"languageFID"}), @ORM\Index(name="IDX_387341A348AA33E0", columns={"addressFID"})})
 * @ORM\Entity
 */
class Employees
{
    /**
     * @var int
     *
     * @ORM\Column(name="employeeID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $employeeid;

    /**
     * @var bool
     *
     * @ORM\Column(name="canLogin", type="boolean", nullable=false)
     */
    private $canlogin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createDate", type="datetime", nullable=false)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="createUser", type="string", length=60, nullable=false)
     */
    private $createuser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="exchangeUser", type="string", length=255, nullable=true)
     */
    private $exchangeuser;

    /**
     * @var bool
     *
     * @ORM\Column(name="hasCalendar", type="boolean", nullable=false)
     */
    private $hascalendar;

    /**
     * @var bool
     *
     * @ORM\Column(name="hasLDAP", type="boolean", nullable=false)
     */
    private $hasldap;

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
    private $isactive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modifyDate", type="datetime", nullable=false)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="modifyUser", type="string", length=60, nullable=false)
     */
    private $modifyuser;

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
    private $username;

    /**
     * @var \Currencys
     *
     * @ORM\ManyToOne(targetEntity="Currencys")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="currencyFID", referencedColumnName="currencyID")
     * })
     */
    private $currencyfid;

    /**
     * @var \Units
     *
     * @ORM\ManyToOne(targetEntity="Units")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rateUnitFID", referencedColumnName="unitID")
     * })
     */
    private $rateunitfid;

    /**
     * @var \Subsidiarys
     *
     * @ORM\ManyToOne(targetEntity="Subsidiarys")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="subsidiaryFID", referencedColumnName="subsidiaryID")
     * })
     */
    private $subsidiaryfid;

    /**
     * @var \Languages
     *
     * @ORM\ManyToOne(targetEntity="Languages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="languageFID", referencedColumnName="languageID")
     * })
     */
    private $languagefid;

    /**
     * @var \Addresses
     *
     * @ORM\ManyToOne(targetEntity="Addresses")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="addressFID", referencedColumnName="addressID")
     * })
     */
    private $addressfid;


}
