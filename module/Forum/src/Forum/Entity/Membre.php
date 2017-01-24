<?php

namespace Forum\Entity;

use Doctrine\ORM\Mapping as ORM;
<<<<<<< HEAD
use Doctrine\Common\Collections\Collection;
=======
>>>>>>> ef836af1c19acf10be67bee3f6905098cd8947c5

/**
 * Membre
 *
<<<<<<< HEAD
 * @ORM\Table(name="Membre")
 * @ORM\Entity
 */
class Membre {

=======
/** @ORM\Table(name="Membre") 
 * @ORM\Entity(repositoryClass="Forum\Repository\Repository") */
class Membre
{
>>>>>>> ef836af1c19acf10be67bee3f6905098cd8947c5
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Membre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMembre;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=50, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=50, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="Pseudo", type="string", length=50, nullable=false)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=50, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="SiteWeb", type="string", length=50, nullable=true)
     */
    private $siteweb;

    /**
     * @var integer
     *
     * @ORM\Column(name="Photo", type="integer", nullable=true)
     */
    private $photo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Admin", type="integer", nullable=false)
     */
    private $admin;

<<<<<<< HEAD
    /**
     * @var integer $codePostal
     *
     * @ORM\ManyToOne(targetEntity="Ville")
     * @ORM\JoinColumn(name="Code_Postal", referencedColumnName="Code_Postal")
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=50, nullable=false)
     */
=======
   /**
    * @var integer
    *
    * @ORM\Column(name="Code_Postal", type="integer", nullable=true)
    */
   private $codePostal;

   /**
    * @var string
    *
    * @ORM\Column(name="Email", type="string", length=50, nullable=false)
    */
>>>>>>> ef836af1c19acf10be67bee3f6905098cd8947c5
    private $email;

    function getIdMembre() {
        return $this->idMembre;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getPseudo() {
        return $this->pseudo;
    }

    function getPassword() {
        return $this->password;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function getSiteweb() {
        return $this->siteweb;
    }

    function getPhoto() {
        return $this->photo;
    }

    function getAdmin() {
        return $this->admin;
    }

    function getCodePostal() {
        return $this->codePostal;
    }

    function getEmail() {
        return $this->email;
    }

    function setIdMembre($idMembre) {
        $this->idMembre = $idMembre;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setPseudo($pseudo) {
        $this->pseudo = $pseudo;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    function setSiteweb($siteweb) {
        $this->siteweb = $siteweb;
    }

    function setPhoto($photo) {
        $this->photo = $photo;
    }

    function setAdmin($admin) {
        $this->admin = $admin;
    }

    function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
    }

    function setEmail($email) {
        $this->email = $email;
    }

<<<<<<< HEAD
}
=======

}

>>>>>>> ef836af1c19acf10be67bee3f6905098cd8947c5
