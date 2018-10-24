<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Swagger\Annotations as SWG;
/**
 * @ORM\Entity(repositoryClass="App\Repository\ExamRepository")
 * @SWG\Definition()
 */
class Exam
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @SWG\Property()
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $Duration;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Description;

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

    public function getDuration(): ?\DateTimeInterface
    {
        return $this->Duration;
    }

    public function setDuration(?\DateTimeInterface $Duration): self
    {
        $this->Duration = $Duration;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }
}
