<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CountrytestRepository")
 */
class Countrytest
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $flag;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Statstest", mappedBy="cou")
     */
    private $statstests;

    public function __construct()
    {
        $this->statstests = new ArrayCollection();
    }

    public function getId()
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

    public function getFlag(): ?string
    {
        return $this->flag;
    }

    public function setFlag(string $flag): self
    {
        $this->flag = $flag;

        return $this;
    }

    /**
     * @return Collection|Statstest[]
     */
    public function getStatstests(): Collection
    {
        return $this->statstests;
    }

    public function addStatstest(Statstest $statstest): self
    {
        if (!$this->statstests->contains($statstest)) {
            $this->statstests[] = $statstest;
            $statstest->setCou($this);
        }

        return $this;
    }

    public function removeStatstest(Statstest $statstest): self
    {
        if ($this->statstests->contains($statstest)) {
            $this->statstests->removeElement($statstest);
            // set the owning side to null (unless already changed)
            if ($statstest->getCou() === $this) {
                $statstest->setCou(null);
            }
        }

        return $this;
    }
}
