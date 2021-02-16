<?php

namespace App\Entity;

use App\Repository\StudieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StudieRepository::class)
 */
class Studie
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
    private $title_stud;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_stud;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=0)
     */
    private $duration_stud;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description_stud;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitleStud(): ?string
    {
        return $this->title_stud;
    }

    public function setTitleStud(string $title_stud): self
    {
        $this->title_stud = $title_stud;

        return $this;
    }

    public function getDateStud(): ?\DateTimeInterface
    {
        return $this->date_stud;
    }

    public function setDateStud(\DateTimeInterface $date_stud): self
    {
        $this->date_stud = $date_stud;

        return $this;
    }

    public function getDurationStud(): ?string
    {
        return $this->duration_stud;
    }

    public function setDurationStud(string $duration_stud): self
    {
        $this->duration_stud = $duration_stud;

        return $this;
    }

    public function getDescriptionStud(): ?string
    {
        return $this->description_stud;
    }

    public function setDescriptionStud(string $description_stud): self
    {
        $this->description_stud = $description_stud;

        return $this;
    }
}
