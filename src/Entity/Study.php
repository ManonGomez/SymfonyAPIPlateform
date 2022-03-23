<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\StudyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=StudyRepository::class)
 */
class Study
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sponsor;

    /**
     * @ORM\Column(type="datetime")
     */
    private $lastActivity;

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

    public function getSponsor(): ?string
    {
        return $this->sponsor;
    }

    public function setSponsor(?string $sponsor): self
    {
        $this->sponsor = $sponsor;

        return $this;
    }

    public function getLastActivity(): ?\DateTimeInterface
    {
        return $this->lastActivity;
    }

    public function setLastActivity(\DateTimeInterface $lastActivity): self
    {
        $this->lastActivity = $lastActivity;

        return $this;
    }
}
