<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CourseOf", mappedBy="mat_id")
     */
    private $courseOf;

    public function __construct()
    {
        $this->courseOf = new ArrayCollection();
    }

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
            $courseOf->setMatId($this);
        }

        return $this;
    }

    public function removeCourseOf(CourseOf $courseOf): self
    {
        if ($this->courseOf->contains($courseOf)) {
            $this->courseOf->removeElement($courseOf);
            // set the owning side to null (unless already changed)
            if ($courseOf->getMatId() === $this) {
                $courseOf->setMatId(null);
            }
        }

        return $this;
    }
}
