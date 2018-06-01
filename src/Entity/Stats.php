<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StatsRepository")
 */
class Stats
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
    private $sta_goal;

    /**
     * @ORM\Column(type="integer")
     */
    private $sta_possession;

    /**
     * @ORM\Column(type="integer")
     */
    private $sta_framedshoot;

    /**
     * @ORM\Column(type="integer")
     */
    private $sta_stop;

    /**
     * @ORM\Column(type="integer")
     */
    private $sta_offside;

    /**
     * @ORM\Column(type="integer")
     */
    private $sta_fault;

    /**
     * @ORM\Column(type="integer")
     */
    private $sta_yallowcardboard;

    /**
     * @ORM\Column(type="integer")
     */
    private $sta_redcarboard;

    /**
     * @ORM\Column(type="integer")
     */
    private $sta_pastfail;

    /**
     * @ORM\Column(type="integer")
     */
    private $sta_pastsuccess;

    /**
     * @ORM\Column(type="integer")
     */
    private $sta_assist;

    /**
     * @ORM\Column(type="integer")
     */
    private $sta_notframedshoot;

    /**
     * @ORM\Column(type="datetime")
     */
    private $sta_date;

    /**
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity="App\Entity\Countries", inversedBy="stats")
     * @ORM\JoinColumn(nullable=false)
     */
    private $cou_id_id;

    public function getId()
    {
        return $this->id;
    }

    public function getStaGoal(): ?int
    {
        return $this->sta_goal;
    }

    public function setStaGoal(int $sta_goal): self
    {
        $this->sta_goal = $sta_goal;

        return $this;
    }

    public function getStaPossession(): ?int
    {
        return $this->sta_possession;
    }

    public function setStaPossession(int $sta_possession): self
    {
        $this->sta_possession = $sta_possession;

        return $this;
    }

    public function getStaFramedshoot(): ?int
    {
        return $this->sta_framedshoot;
    }

    public function setStaFramedshoot(int $sta_framedshoot): self
    {
        $this->sta_framedshoot = $sta_framedshoot;

        return $this;
    }

    public function getStaStop(): ?int
    {
        return $this->sta_stop;
    }

    public function setStaStop(int $sta_stop): self
    {
        $this->sta_stop = $sta_stop;

        return $this;
    }

    public function getStaOffside(): ?int
    {
        return $this->sta_offside;
    }

    public function setStaOffside(int $sta_offside): self
    {
        $this->sta_offside = $sta_offside;

        return $this;
    }

    public function getStaFault(): ?int
    {
        return $this->sta_fault;
    }

    public function setStaFault(int $sta_fault): self
    {
        $this->sta_fault = $sta_fault;

        return $this;
    }

    public function getStaYallowcardboard(): ?int
    {
        return $this->sta_yallowcardboard;
    }

    public function setStaYallowcardboard(int $sta_yallowcardboard): self
    {
        $this->sta_yallowcardboard = $sta_yallowcardboard;

        return $this;
    }

    public function getStaRedcarboard(): ?int
    {
        return $this->sta_redcarboard;
    }

    public function setStaRedcarboard(int $sta_redcarboard): self
    {
        $this->sta_redcarboard = $sta_redcarboard;

        return $this;
    }

    public function getStaPastfail(): ?int
    {
        return $this->sta_pastfail;
    }

    public function setStaPastfail(int $sta_pastfail): self
    {
        $this->sta_pastfail = $sta_pastfail;

        return $this;
    }

    public function getStaPastsuccess(): ?int
    {
        return $this->sta_pastsuccess;
    }

    public function setStaPastsuccess(int $sta_pastsuccess): self
    {
        $this->sta_pastsuccess = $sta_pastsuccess;

        return $this;
    }

    public function getStaAssist(): ?int
    {
        return $this->sta_assist;
    }

    public function setStaAssist(int $sta_assist): self
    {
        $this->sta_assist = $sta_assist;

        return $this;
    }

    public function getStaNotframedshoot(): ?int
    {
        return $this->sta_notframedshoot;
    }

    public function setStaNotframedshoot(int $sta_notframedshoot): self
    {
        $this->sta_notframedshoot = $sta_notframedshoot;

        return $this;
    }

    public function getStaDate(): ?\DateTimeInterface
    {
        return $this->sta_date;
    }

    public function setStaDate(\DateTimeInterface $sta_date): self
    {
        $this->sta_date = $sta_date;

        return $this;
    }

    public function getCouIdId(): ?int
    {
        return $this->cou_id_id;
    }

    public function setCouId(?int $cou_id_id): self
    {
        $this->cou_id_id = $cou_id_id;

        return $this;
    }
}
