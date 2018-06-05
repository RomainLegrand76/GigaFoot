<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CourseOfRepository")
 */
class CourseOf
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $cof_score;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Countries", inversedBy="courseOfs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $country;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Rencontre", inversedBy="courseOfs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $rencontre;

    public function getId()
    {
        return $this->id;
    }

    public function getCofScore(): ?string
    {
        return $this->cof_score;
    }

    public function setCofScore(?string $cof_score): self
    {
        $this->cof_score = $cof_score;

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

    public function getRencontre(): ?Rencontre
    {
        return $this->rencontre;
    }

    public function setRencontre(?Rencontre $rencontre): self
    {
        $this->rencontre = $rencontre;

        return $this;
    }
}
