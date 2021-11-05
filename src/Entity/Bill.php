<?php

namespace App\Entity;

use App\Repository\BillRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BillRepository::class)
 */
class Bill
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="bills")
     * @ORM\JoinColumn(nullable=false)
     */
    private $IdClient;

    /**
     * @ORM\ManyToOne(targetEntity=Renter::class, inversedBy="bills")
     * @ORM\JoinColumn(nullable=false)
     */
    private $IdRenter;

    /**
     * @ORM\ManyToOne(targetEntity=Vehicle::class, inversedBy="bills")
     * @ORM\JoinColumn(nullable=false)
     */
    private $IdVehicle;

    /**
     * @ORM\Column(type="datetime")
     */
    private $BeginDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $EndDate;

    /**
     * @ORM\Column(type="float")
     */
    private $Price;

    /**
     * @ORM\Column(type="boolean")
     */
    private $PaymentStatus;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdClient(): ?Client
    {
        return $this->IdClient;
    }

    public function setIdClient(?Client $IdClient): self
    {
        $this->IdClient = $IdClient;

        return $this;
    }

    public function getIdRenter(): ?Renter
    {
        return $this->IdRenter;
    }

    public function setIdRenter(?Renter $IdRenter): self
    {
        $this->IdRenter = $IdRenter;

        return $this;
    }

    public function getIdVehicle(): ?Vehicle
    {
        return $this->IdVehicle;
    }

    public function setIdVehicle(?Vehicle $IdVehicle): self
    {
        $this->IdVehicle = $IdVehicle;

        return $this;
    }

    public function getBeginDate(): ?\DateTimeInterface
    {
        return $this->BeginDate;
    }

    public function setBeginDate(\DateTimeInterface $BeginDate): self
    {
        $this->BeginDate = $BeginDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->EndDate;
    }

    public function setEndDate(\DateTimeInterface $EndDate): self
    {
        $this->EndDate = $EndDate;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->Price;
    }

    public function setPrice(float $Price): self
    {
        $this->Price = $Price;

        return $this;
    }

    public function getPaymentStatus(): ?bool
    {
        return $this->PaymentStatus;
    }

    public function setPaymentStatus(bool $PaymentStatus): self
    {
        $this->PaymentStatus = $PaymentStatus;

        return $this;
    }
}
