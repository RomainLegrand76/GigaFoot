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
    private $cho_point;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Countries", inversedBy="chooses")
     * @ORM\JoinColumn(nullable=false)
     */
    private $country;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Users", inversedBy="chooses")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

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

    public function getChoPoint(): ?int
    {
        return $this->cho_point;
    }

    public function setChoPoint(?int $cho_point): self
    {
        $this->cho_point = $cho_point;

        return $this;
    }

    public function getCountry(): ?Countries
    {
        return $this->country;
    }

    public function setCountry(?Countries $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getUser(): ?Users
    {
        return $this->user;
    }

    public function setUser(?Users $user): self
    {
        $this->user = $user;

        return $this;
    }
}
