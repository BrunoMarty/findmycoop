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

    function getIdCat() {
        return $this->idCat;
    }

    function getNomCat() {
        return $this->nomCat;
    }

    function setIdCat($idCat) {
        $this->idCat = $idCat;
    }

    function setNomCat($nomCat) {
        $this->nomCat = $nomCat;
    }


}

