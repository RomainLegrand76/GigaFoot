<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsersRepository")
 */
class Users
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $use_pseudo;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $use_firstname;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $use_lastname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $use_password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $use_mail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $use_token;

    /**
     * @ORM\Column(type="integer")
     */
    private $use_role;

    public function getId()
    {
        return $this->id;
    }

    public function getUsePseudo(): ?string
    {
        return $this->use_pseudo;
    }

    public function setUsePseudo(string $use_pseudo): self
    {
        $this->use_pseudo = $use_pseudo;

        return $this;
    }

    public function getUseFirstname(): ?string
    {
        return $this->use_firstname;
    }

    public function setUseFirstname(string $use_firstname): self
    {
        $this->use_firstname = $use_firstname;

        return $this;
    }

    public function getUseLastname(): ?string
    {
        return $this->use_lastname;
    }

    public function setUseLastname(string $use_lastname): self
    {
        $this->use_lastname = $use_lastname;

        return $this;
    }

    public function getUsePassword(): ?string
    {
        return $this->use_password;
    }

    public function setUsePassword(string $use_password): self
    {
        $this->use_password = $use_password;

        return $this;
    }

    public function getUseMail(): ?string
    {
        return $this->use_mail;
    }

    public function setUseMail(string $use_mail): self
    {
        $this->use_mail = $use_mail;

        return $this;
    }

    public function getUseToken(): ?string
    {
        return $this->use_token;
    }

    public function setUseToken(string $use_token): self
    {
        $this->use_token = $use_token;

        return $this;
    }

    public function getUseRole(): ?int
    {
        return $this->use_role;
    }

    public function setUseRole(int $use_role): self
    {
        $this->use_role = $use_role;

        return $this;
    }
}
