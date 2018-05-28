<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MatchRepository")
 */
class Match
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
    private $mat_date;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $mat_place;

    public function getId()
    {
        return $this->id;
    }

    public function getMatDate(): ?\DateTimeInterface
    {
        return $this->mat_date;
    }

    public function setMatDate(\DateTimeInterface $mat_date): self
    {
        $this->mat_date = $mat_date;

        return $this;
    }

    public function getMatPlace(): ?string
    {
        return $this->mat_place;
    }

    public function setMatPlace(string $mat_place): self
    {
        $this->mat_place = $mat_place;

        return $this;
    }
}
