<?php

namespace Xippogmbh\XippoErpCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Address
{
    public function getAddressid(): ?int
    {
        return $this->addressid;
    }

    public function getAddresssalutation(): ?string
    {
        return $this->addresssalutation;
    }

    public function setAddresssalutation(?string $addresssalutation): self
    {
        $this->addresssalutation = $addresssalutation;

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

    public function getCreatedate(): ?\DateTimeInterface
    {
        return $this->createdate;
    }

    public function setCreatedate(\DateTimeInterface $createdate): self
    {
        $this->createdate = $createdate;

        return $this;
    }

    public function getCreateuser(): ?string
    {
        return $this->createuser;
    }

    public function setCreateuser(string $createuser): self
    {
        $this->createuser = $createuser;

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

    public function getEbillingidentity(): ?string
    {
        return $this->ebillingidentity;
    }

    public function setEbillingidentity(?string $ebillingidentity): self
    {
        $this->ebillingidentity = $ebillingidentity;

        return $this;
    }

    public function getExtreference(): ?string
    {
        return $this->extreference;
    }

    public function setExtreference(?string $extreference): self
    {
        $this->extreference = $extreference;

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

    public function getIslocked(): ?bool
    {
        return $this->islocked;
    }

    public function setIslocked(bool $islocked): self
    {
        $this->islocked = $islocked;

        return $this;
    }

    public function getIstemporary(): ?bool
    {
        return $this->istemporary;
    }

    public function setIstemporary(bool $istemporary): self
    {
        $this->istemporary = $istemporary;

        return $this;
    }

    public function getLettersalutation(): ?string
    {
        return $this->lettersalutation;
    }

    public function setLettersalutation(?string $lettersalutation): self
    {
        $this->lettersalutation = $lettersalutation;

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

    public function getMiddlename(): ?string
    {
        return $this->middlename;
    }

    public function setMiddlename(?string $middlename): self
    {
        $this->middlename = $middlename;

        return $this;
    }

    public function getModifydate(): ?\DateTimeInterface
    {
        return $this->modifydate;
    }

    public function setModifydate(\DateTimeInterface $modifydate): self
    {
        $this->modifydate = $modifydate;

        return $this;
    }

    public function getModifyuser(): ?string
    {
        return $this->modifyuser;
    }

    public function setModifyuser(string $modifyuser): self
    {
        $this->modifyuser = $modifyuser;

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

    public function getPobox(): ?string
    {
        return $this->pobox;
    }

    public function setPobox(?string $pobox): self
    {
        $this->pobox = $pobox;

        return $this;
    }

    public function getPocity(): ?string
    {
        return $this->pocity;
    }

    public function setPocity(?string $pocity): self
    {
        $this->pocity = $pocity;

        return $this;
    }

    public function getPozip(): ?string
    {
        return $this->pozip;
    }

    public function setPozip(?string $pozip): self
    {
        $this->pozip = $pozip;

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

    public function getVatnumber(): ?string
    {
        return $this->vatnumber;
    }

    public function setVatnumber(?string $vatnumber): self
    {
        $this->vatnumber = $vatnumber;

        return $this;
    }

    public function getZaznumber(): ?string
    {
        return $this->zaznumber;
    }

    public function setZaznumber(?string $zaznumber): self
    {
        $this->zaznumber = $zaznumber;

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

    public function getTitlefid(): ?Titles
    {
        return $this->titlefid;
    }

    public function setTitlefid(?Titles $titlefid): self
    {
        $this->titlefid = $titlefid;

        return $this;
    }

    public function getSalutationfid(): ?Salutations
    {
        return $this->salutationfid;
    }

    public function setSalutationfid(?Salutations $salutationfid): self
    {
        $this->salutationfid = $salutationfid;

        return $this;
    }

    public function getCountryfid(): ?Countrys
    {
        return $this->countryfid;
    }

    public function setCountryfid(?Countrys $countryfid): self
    {
        $this->countryfid = $countryfid;

        return $this;
    }

    public function getAddresstypefid(): ?Addresstypes
    {
        return $this->addresstypefid;
    }

    public function setAddresstypefid(?Addresstypes $addresstypefid): self
    {
        $this->addresstypefid = $addresstypefid;

        return $this;
    }


}
