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
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cou_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cou_flag;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Stats", mappedBy="country")
     */
    private $stats;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Choose", mappedBy="country")
     */
    private $chooses;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CourseOf", mappedBy="country")
     */
    private $courseOfs;

    public function __construct()
    {
        $this->stats = new ArrayCollection();
        $this->chooses = new ArrayCollection();
        $this->courseOfs = new ArrayCollection();
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
    public function getStats(): Collection
    {
        return $this->stats;
    }

    public function addStat(Stats $stat): self
    {
        if (!$this->stats->contains($stat)) {
            $this->stats[] = $stat;
            $stat->setCountry($this);
        }

        return $this;
    }

    public function removeStat(Stats $stat): self
    {
        if ($this->stats->contains($stat)) {
            $this->stats->removeElement($stat);
            // set the owning side to null (unless already changed)
            if ($stat->getCountry() === $this) {
                $stat->setCountry(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Choose[]
     */
    public function getChooses(): Collection
    {
        return $this->chooses;
    }

    public function addChoose(Choose $choose): self
    {
        if (!$this->chooses->contains($choose)) {
            $this->chooses[] = $choose;
            $choose->setCountry($this);
        }

        return $this;
    }

    public function removeChoose(Choose $choose): self
    {
        if ($this->chooses->contains($choose)) {
            $this->chooses->removeElement($choose);
            // set the owning side to null (unless already changed)
            if ($choose->getCountry() === $this) {
                $choose->setCountry(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|CourseOf[]
     */
    public function getCourseOfs(): Collection
    {
        return $this->courseOfs;
    }

    public function addCourseOf(CourseOf $courseOf): self
    {
        if (!$this->courseOfs->contains($courseOf)) {
            $this->courseOfs[] = $courseOf;
            $courseOf->setCountry($this);
        }

        return $this;
    }

    public function removeCourseOf(CourseOf $courseOf): self
    {
        if ($this->courseOfs->contains($courseOf)) {
            $this->courseOfs->removeElement($courseOf);
            // set the owning side to null (unless already changed)
            if ($courseOf->getCountry() === $this) {
                $courseOf->setCountry(null);
            }
        }

        return $this;
    }
}
