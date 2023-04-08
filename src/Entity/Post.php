<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PostRepository::class)]
class Post
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 64)]
    private ?string $Author = null;

    #[ORM\Column]
    private ?int $PostId = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $PostText = null;

    #[ORM\Column]
    private ?bool $IsReply = null;

    #[ORM\Column]
    private ?int $PostNumber = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $PostDate = null;

    #[ORM\Column(type: Types::OBJECT, nullable: true)]
    private ?object $PostImage = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAuthor(): ?string
    {
        return $this->Author;
    }

    public function setAuthor(string $Author): self
    {
        $this->Author = $Author;

        return $this;
    }

    public function getPostId(): ?int
    {
        return $this->PostId;
    }

    public function setPostId(int $PostId): self
    {
        $this->PostId = $PostId;

        return $this;
    }

    public function getPostText(): ?string
    {
        return $this->PostText;
    }

    public function setPostText(?string $PostText): self
    {
        $this->PostText = $PostText;

        return $this;
    }

    public function isIsReply(): ?bool
    {
        return $this->IsReply;
    }

    public function setIsReply(bool $IsReply): self
    {
        $this->IsReply = $IsReply;

        return $this;
    }

    public function getPostNumber(): ?int
    {
        return $this->PostNumber;
    }

    public function setPostNumber(int $PostNumber): self
    {
        $this->PostNumber = $PostNumber;

        return $this;
    }

    public function getPostDate(): ?\DateTimeImmutable
    {
        return $this->PostDate;
    }

    public function setPostDate(\DateTimeImmutable $PostDate): self
    {
        $this->PostDate = $PostDate;

        return $this;
    }

    public function getPostImage(): ?object
    {
        return $this->PostImage;
    }

    public function setPostImage(?object $PostImage): self
    {
        $this->PostImage = $PostImage;

        return $this;
    }
}
