<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\OneToMany(targetEntity="App\Entity\Stats", mappedBy="countries")
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

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Stats", mappedBy="cou_id")
     */
    private $stat;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Choose", mappedBy="cou_id")
     */
    private $choices;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CourseOf", mappedBy="cou_id")
     */
    private $courseOf;

    public function __construct()
    {
        $this->stat = new ArrayCollection();
        $this->choices = new ArrayCollection();
        $this->courseOf = new ArrayCollection();
    }

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

    /**
     * @return Collection|Stats[]
     */
    public function getStat(): Collection
    {
        return $this->stat;
    }

    public function addStat(Stats $stat): self
    {
        if (!$this->stat->contains($stat)) {
            $this->stat[] = $stat;
            $stat->setCouId($this);
        }

        return $this;
    }

    public function removeStat(Stats $stat): self
    {
        if ($this->stat->contains($stat)) {
            $this->stat->removeElement($stat);
            // set the owning side to null (unless already changed)
            if ($stat->getCouId() === $this) {
                $stat->setCouId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Choose[]
     */
    public function getChoices(): Collection
    {
        return $this->choices;
    }

    public function addChoice(Choose $choice): self
    {
        if (!$this->choices->contains($choice)) {
            $this->choices[] = $choice;
            $choice->setCouId($this);
        }

        return $this;
    }

    public function removeChoice(Choose $choice): self
    {
        if ($this->choices->contains($choice)) {
            $this->choices->removeElement($choice);
            // set the owning side to null (unless already changed)
            if ($choice->getCouId() === $this) {
                $choice->setCouId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|CourseOf[]
     */
    public function getCourseOf(): Collection
    {
        return $this->courseOf;
    }

    public function addCourseOf(CourseOf $courseOf): self
    {
        if (!$this->courseOf->contains($courseOf)) {
            $this->courseOf[] = $courseOf;
            $courseOf->setCouId($this);
        }

        return $this;
    }

    public function removeCourseOf(CourseOf $courseOf): self
    {
        if ($this->courseOf->contains($courseOf)) {
            $this->courseOf->removeElement($courseOf);
            // set the owning side to null (unless already changed)
            if ($courseOf->getCouId() === $this) {
                $courseOf->setCouId(null);
            }
        }

        return $this;
    }
}
