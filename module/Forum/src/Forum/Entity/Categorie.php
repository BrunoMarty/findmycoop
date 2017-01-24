<?php

namespace Forum\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="Categorie")
 * @ORM\Entity
 */
class Categorie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Cat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCat;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Cat", type="string", length=30, nullable=false)
     */
    private $nomCat;

<<<<<<< HEAD
    /**
     * @var integer
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumn(name="ID_Parent", referencedColumnName="ID_Cat", nullable=true)
     */
    private $idParent;

=======
>>>>>>> ef836af1c19acf10be67bee3f6905098cd8947c5
    function getIdCat() {
        return $this->idCat;
    }

    function getNomCat() {
        return $this->nomCat;
    }

<<<<<<< HEAD
    function getIdParent() {
        return $this->idParent;
    }

=======
>>>>>>> ef836af1c19acf10be67bee3f6905098cd8947c5
    function setIdCat($idCat) {
        $this->idCat = $idCat;
    }

    function setNomCat($nomCat) {
        $this->nomCat = $nomCat;
    }

<<<<<<< HEAD
    function setIdParent($idParent) {
        $this->idParent;
    }

    public function __toString() 
    {
        return $this->getNom();
    }
=======
>>>>>>> ef836af1c19acf10be67bee3f6905098cd8947c5

}

