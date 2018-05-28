<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ChooseRepository")
 */
class Choose
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $cho_date;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cho_points;

    public function getId()
    {
        return $this->id;
    }

    public function getChoDate(): ?\DateTimeInterface
    {
        return $this->cho_date;
    }

    public function setChoDate(\DateTimeInterface $cho_date): self
    {
        $this->cho_date = $cho_date;

        return $this;
    }

    public function getChoPoints(): ?int
    {
        return $this->cho_points;
    }

    public function setChoPoints(?int $cho_points): self
    {
        $this->cho_points = $cho_points;

        return $this;
    }
}
