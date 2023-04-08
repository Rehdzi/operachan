<?php

namespace App\Entity;

use App\Repository\BoardRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BoardRepository::class)]
class Board
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 64)]
    private ?string $BoardName = null;

    #[ORM\Column]
    private ?int $BoardId = null;

    #[ORM\Column]
    private ?bool $IsLocked = null;

    #[ORM\Column]
    private ?bool $IsVisible = null;

    #[ORM\Column(length: 8)]
    private ?string $BoardShortName = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBoardName(): ?string
    {
        return $this->BoardName;
    }

    public function setBoardName(string $BoardName): self
    {
        $this->BoardName = $BoardName;

        return $this;
    }

    public function getBoardId(): ?int
    {
        return $this->BoardId;
    }

    public function setBoardId(int $BoardId): self
    {
        $this->BoardId = $BoardId;

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

    public function getBoardShortName(): ?string
    {
        return $this->BoardShortName;
    }

    public function setBoardShortName(string $BoardShortName): self
    {
        $this->BoardShortName = $BoardShortName;

        return $this;
    }
}
