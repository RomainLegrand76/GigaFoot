<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CountriesRepository")
 */
class Countries
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $cou_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cou_flag;

    public function getId()
    {
        return $this->id;
    }

    public function getCouName(): ?string
    {
        return $this->cou_name;
    }

    public function setCouName(string $cou_name): self
    {
        $this->cou_name = $cou_name;

        return $this;
    }

    public function getCouFlag(): ?string
    {
        return $this->cou_flag;
    }

    public function setCouFlag(string $cou_flag): self
    {
        $this->cou_flag = $cou_flag;

        return $this;
    }
}
