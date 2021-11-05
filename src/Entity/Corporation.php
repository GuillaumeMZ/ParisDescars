<?php

namespace App\Entity;

use App\Repository\CorporationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CorporationRepository::class)
 */
class Corporation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $CorpName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $CorpAddress;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCorpName(): ?string
    {
        return $this->CorpName;
    }

    public function setCorpName(string $CorpName): self
    {
        $this->CorpName = $CorpName;

        return $this;
    }

    public function getCorpAddress(): ?string
    {
        return $this->CorpAddress;
    }

    public function setCorpAddress(string $CorpAddress): self
    {
        $this->CorpAddress = $CorpAddress;

        return $this;
    }
}
