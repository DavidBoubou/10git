<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;        /*Alias */ 
use Symfony\Component\Validator\Constraints as Validator ;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InscriptionRepository")
 */
class Inscription implements UserInterface
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
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Prenom;



    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Adresse;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Validator\Email(
     *     message = "L'email n'est pas valide ."
     * )
     */
    private $Mail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Validator\NotBlank(allowNull="true")
     */
    private $Profession;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Validator\NotBlank(allowNull="true")
     */
    private $Url_web;

    /**
     * @ORM\Column(type="string", length=255)
     * @Validator\Length(min="10",minMessage="Votre mot de passe doit faire au minimun 10 caractère ")
     */
    private $Password;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }


    public function getAdresse(): ?string
    {
        return $this->Adresse;
    }

    public function setAdresse(string $Adresse): self
    {
        $this->Adresse = $Adresse;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->Mail;
    }

    public function setMail(string $Mail): self
    {
        $this->Mail = $Mail;

        return $this;
    }

    public function getProfession(): ?string
    {
        return $this->Profession;
    }

    public function setProfession(string $Profession): self
    {
        $this->Profession = $Profession;

        return $this;
    }

    public function getUrlWeb(): ?string
    {
        return $this->Url_web;
    }

    public function setUrlWeb(?string $Url_web): self
    {
        $this->Url_web = $Url_web;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->Password;
    }
     /**
     * @see UserInterface
     */

    public function setPassword(string $Password): self
    {
        $this->Password = $Password;

        return $this;
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }


    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
}
