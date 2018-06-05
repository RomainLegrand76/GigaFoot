<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RencontreRepository")
 */
class Rencontre
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
    private $ren_date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ren_place;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CourseOf", mappedBy="rencontre")
     */
    private $courseOfs;

    public function __construct()
    {
        $this->courseOfs = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getRenDate(): ?\DateTimeInterface
    {
        return $this->ren_date;
    }

    public function setRenDate(\DateTimeInterface $ren_date): self
    {
        $this->ren_date = $ren_date;

        return $this;
    }

    public function getRenPlace(): ?string
    {
        return $this->ren_place;
    }

    public function setRenPlace(string $ren_place): self
    {
        $this->ren_place = $ren_place;

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
            $courseOf->setRencontre($this);
        }

        return $this;
    }

    public function removeCourseOf(CourseOf $courseOf): self
    {
        if ($this->courseOfs->contains($courseOf)) {
            $this->courseOfs->removeElement($courseOf);
            // set the owning side to null (unless already changed)
            if ($courseOf->getRencontre() === $this) {
                $courseOf->setRencontre(null);
            }
        }

        return $this;
    }
}
