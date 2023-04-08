<?php

namespace App\Entity;

use App\Repository\ThreadRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ThreadRepository::class)]
class Thread
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 128, nullable: true)]
    private ?string $ThreadName = null;

    #[ORM\Column]
    private ?int $ThreadNumber = null;

    #[ORM\Column]
    private ?int $ThreadId = null;

    #[ORM\Column]
    private ?bool $IsLocked = null;

    #[ORM\Column]
    private ?bool $IsVisible = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getThreadName(): ?string
    {
        return $this->ThreadName;
    }

    public function setThreadName(?string $ThreadName): self
    {
        $this->ThreadName = $ThreadName;

        return $this;
    }

    public function getThreadNumber(): ?int
    {
        return $this->ThreadNumber;
    }

    public function setThreadNumber(int $ThreadNumber): self
    {
        $this->ThreadNumber = $ThreadNumber;

        return $this;
    }

    public function getThreadId(): ?int
    {
        return $this->ThreadId;
    }

    public function setThreadId(int $ThreadId): self
    {
        $this->ThreadId = $ThreadId;

        return $this;
    }

    public function isIsLocked(): ?bool
    {
        return $this->IsLocked;
    }

    public function setIsLocked(bool $IsLocked): self
    {
        $this->IsLocked = $IsLocked;

        return $this;
    }

    public function isIsVisible(): ?bool
    {
        return $this->IsVisible;
    }

    public function setIsVisible(bool $IsVisible): self
    {
        $this->IsVisible = $IsVisible;

        return $this;
    }
}
