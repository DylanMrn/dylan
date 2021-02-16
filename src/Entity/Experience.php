<?php

namespace App\Entity;

use App\Repository\ExperienceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ExperienceRepository::class)
 */
class Experience
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
    private $title_exp;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_exp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $job;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contract;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description_exp;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=0, nullable=true)
     */
    private $duration_exp;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitleExp(): ?string
    {
        return $this->title_exp;
    }

    public function setTitleExp(string $title_exp): self
    {
        $this->title_exp = $title_exp;

        return $this;
    }

    public function getDateExp(): ?\DateTimeInterface
    {
        return $this->date_exp;
    }

    public function setDateExp(\DateTimeInterface $date_exp): self
    {
        $this->date_exp = $date_exp;

        return $this;
    }

    public function getJob(): ?string
    {
        return $this->job;
    }

    public function setJob(string $job): self
    {
        $this->job = $job;

        return $this;
    }

    public function getContract(): ?string
    {
        return $this->contract;
    }

    public function setContract(string $contract): self
    {
        $this->contract = $contract;

        return $this;
    }

    public function getDescriptionExp(): ?string
    {
        return $this->description_exp;
    }

    public function setDescriptionExp(string $description_exp): self
    {
        $this->description_exp = $description_exp;

        return $this;
    }

    public function getDurationExp(): ?string
    {
        return $this->duration_exp;
    }

    public function setDurationExp(?string $duration_exp): self
    {
        $this->duration_exp = $duration_exp;

        return $this;
    }
}
