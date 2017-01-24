<?php

namespace Forum\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Forum
 *
 * @ORM\Table(name="Forum")
 * @ORM\Entity
 */
class Forum
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Forum", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idForum;

    /**
     * @var string
     *
     * @ORM\Column(name="Titre_F", type="string", length=50, nullable=false)
     */
    private $titreF;

    /**
     * @var string
     *
     * @ORM\Column(name="Texte_F", type="text", length=65535, nullable=false)
     */
    private $texteF;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_F", type="datetime", nullable=false)
     */
    private $dateF;

    /**
     * @var integer
     *
     * @ORM\Column(name="Categorie", type="integer", nullable=false)
     */
    private $categorie;

    /**
     * @var integer
<<<<<<< HEAD
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumn(name="ID_Cat", referencedColumnName="ID_Cat", nullable=true)
   
     */
    private $idCat;

     /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Membre")
     * @ORM\JoinColumn(name="ID_Createur", referencedColumnName="ID_Membre",  nullable=true)
     */
    
    private $idCreateur;
     /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Forum")
     * @ORM\JoinColumn(name="ID_Parent", referencedColumnName="ID_Forum", nullable=true)
     */
 
    private $idParent;

    function getIdForum() {
        return $this->idForum;
    }

    function getTitreF() {
        return $this->titreF;
    }

    function getTexteF() {
        return $this->texteF;
    }

    function getDateF(): \DateTime {
        return $this->dateF;
    }

    function getCategorie() {
        return $this->categorie;
    }

    function getIdScat() {
        return $this->idScat;
    }

    function getIdCreateur() {
        return $this->idCreateur;
    }

    function getIdParent() {
        return $this->idParent;
    }

    function setIdForum($idForum) {
        $this->idForum = $idForum;
    }

    function setTitreF($titreF) {
        $this->titreF = $titreF;
    }

    function setTexteF($texteF) {
        $this->texteF = $texteF;
    }

    function setDateF(\DateTime $dateF) {
        $this->dateF = $dateF;
    }

    function setCategorie($categorie) {
        $this->categorie = $categorie;
    }

    function setIdScat($idScat) {
        $this->idScat = $idScat;
    }

    function setIdCreateur($idCreateur) {
        $this->idCreateur = $idCreateur;
    }

    function setIdParent($idParent) {
        $this->idParent = $idParent;
    }


}
=======
     *
     * @ORM\Column(name="ID_SCat", type="integer", nullable=false)
     */
    private $idScat;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Createur", type="integer", nullable=false)
     */
    private $idCreateur;


}

function getIdForum() {
    return $this->idForum;
}

 function getTitreF() {
    return $this->titreF;
}

 function getTexteF() {
    return $this->texteF;
}

 function getDateF(): \DateTime {
    return $this->dateF;
}

 function getCategorie() {
    return $this->categorie;
}

 function getIdScat() {
    return $this->idScat;
}

 function getIdCreateur() {
    return $this->idCreateur;
}

 function setIdForum($idForum) {
    $this->idForum = $idForum;
}

 function setTitreF($titreF) {
    $this->titreF = $titreF;
}

 function setTexteF($texteF) {
    $this->texteF = $texteF;
}

 function setDateF(\DateTime $dateF) {
    $this->dateF = $dateF;
}

 function setCategorie($categorie) {
    $this->categorie = $categorie;
}

 function setIdScat($idScat) {
    $this->idScat = $idScat;
}

 function setIdCreateur($idCreateur) {
    $this->idCreateur = $idCreateur;
}


>>>>>>> ef836af1c19acf10be67bee3f6905098cd8947c5

