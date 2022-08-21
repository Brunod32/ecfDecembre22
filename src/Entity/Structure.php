<?php

namespace App\Entity;

use App\Repository\StructureRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StructureRepository::class)]
class Structure
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name = null;

    #[ORM\Column(length: 20)]
    private ?string $managerFirstname = null;

    #[ORM\Column(length: 20)]
    private ?string $managerLastname = null;

    #[ORM\Column(length: 100)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $address = null;

    #[ORM\Column]
    private ?bool $active = false;

    #[ORM\Column]
    private ?bool $sellFood = false;

    #[ORM\Column]
    private ?bool $sellDrink = false;

    #[ORM\Column]
    private ?bool $sendNewsletter = false;

    #[ORM\Column]
    private ?bool $scheduleManagement = false;

    #[ORM\Column]
    private ?bool $privateLesson = false;

    #[ORM\ManyToOne(inversedBy: 'structures')]
    #[ORM\JoinColumn(nullable: false)]
    private ?TechnicalTeam $technicalTeamId = null;

    #[ORM\ManyToOne(inversedBy: 'structures')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Partner $partnerId = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getManagerFirstname(): ?string
    {
        return $this->managerFirstname;
    }

    public function setManagerFirstname(string $managerFirstname): self
    {
        $this->managerFirstname = $managerFirstname;

        return $this;
    }

    public function getManagerLastname(): ?string
    {
        return $this->managerLastname;
    }

    public function setManagerLastname(string $managerLastname): self
    {
        $this->managerLastname = $managerLastname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

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

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function isSellFood(): ?bool
    {
        return $this->sellFood;
    }

    public function setSellFood(bool $sellFood): self
    {
        $this->sellFood = $sellFood;

        return $this;
    }

    public function isSellDrink(): ?bool
    {
        return $this->sellDrink;
    }

    public function setSellDrink(bool $sellDrink): self
    {
        $this->sellDrink = $sellDrink;

        return $this;
    }

    public function isSendNewsletter(): ?bool
    {
        return $this->sendNewsletter;
    }

    public function setSendNewsletter(bool $sendNewsletter): self
    {
        $this->sendNewsletter = $sendNewsletter;

        return $this;
    }

    public function isScheduleManagement(): ?bool
    {
        return $this->scheduleManagement;
    }

    public function setScheduleManagement(bool $scheduleManagement): self
    {
        $this->scheduleManagement = $scheduleManagement;

        return $this;
    }

    public function isPrivateLesson(): ?bool
    {
        return $this->privateLesson;
    }

    public function setPrivateLesson(bool $privateLesson): self
    {
        $this->privateLesson = $privateLesson;

        return $this;
    }

    public function getTechnicalTeamId(): ?TechnicalTeam
    {
        return $this->technicalTeamId;
    }

    public function setTechnicalTeamId(?TechnicalTeam $technicalTeamId): self
    {
        $this->technicalTeamId = $technicalTeamId;

        return $this;
    }

    public function getPartnerId(): ?Partner
    {
        return $this->partnerId;
    }

    public function setPartnerId(?Partner $partnerId): self
    {
        $this->partnerId = $partnerId;

        return $this;
    }
}
