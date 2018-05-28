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
    private $score;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Countries", inversedBy="courseOf")
     * @ORM\JoinColumn(nullable=false)
     */
    private $cou_id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Match", inversedBy="courseOf")
     * @ORM\JoinColumn(nullable=false)
     */
    private $mat_id;

    public function getId()
    {
        return $this->id;
    }

    public function getScore(): ?string
    {
        return $this->score;
    }

    public function setScore(?string $score): self
    {
        $this->score = $score;

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

    public function getMatId(): ?Match
    {
        return $this->mat_id;
    }

    public function setMatId(?Match $mat_id): self
    {
        $this->mat_id = $mat_id;

        return $this;
    }
}
