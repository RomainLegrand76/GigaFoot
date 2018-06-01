<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StatstestRepository")
 */
class Statstest
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $goal;

    /**
     * @ORM\Column(type="integer")
     */
    private $stop;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Countrytest", inversedBy="statstests")
     * @ORM\JoinColumn(nullable=false)
     */
    private $cou;

    public function getId()
    {
        return $this->id;
    }

    public function getGoal(): ?int
    {
        return $this->goal;
    }

    public function setGoal(int $goal): self
    {
        $this->goal = $goal;

        return $this;
    }

    public function getStop(): ?int
    {
        return $this->stop;
    }

    public function setStop(int $stop): self
    {
        $this->stop = $stop;

        return $this;
    }

    public function getCou(): ?countrytest
    {
        return $this->cou;
    }

    public function setCou(?countrytest $cou): int
    {
        $this->cou = $cou;

        return $this;
    }
}
