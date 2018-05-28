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

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Countries", inversedBy="choices")
     * @ORM\JoinColumn(nullable=false)
     */
    private $cou_id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Users", inversedBy="choice")
     * @ORM\JoinColumn(nullable=false)
     */
    private $use_id;

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

    public function getCouId(): ?Countries
    {
        return $this->cou_id;
    }

    public function setCouId(?Countries $cou_id): self
    {
        $this->cou_id = $cou_id;

        return $this;
    }

    public function getUseId(): ?Users
    {
        return $this->use_id;
    }

    public function setUseId(?Users $use_id): self
    {
        $this->use_id = $use_id;

        return $this;
    }
}
