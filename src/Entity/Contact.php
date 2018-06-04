<?php

namespace App\Entity;




class Contact
{

    private $id;

    private $nom;

    private $prenom;

    private $mail;

    private $corp;


    public function getId()
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getCorp(): ?text
    {
        return $this->corp;
    }

    public function setCorp(text $corp): self
    {
        $this->corp = $corp;

        return $this;
    }
}
