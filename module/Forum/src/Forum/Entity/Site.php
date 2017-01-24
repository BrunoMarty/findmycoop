<?php

namespace Forum\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Site
 *
<<<<<<< HEAD
 * @ORM\Table(name="Site")
 * @ORM\Entity
 */
=======
/** @ORM\Table(name="Site") 
 * @ORM\Entity(repositoryClass="Forum\Repository\Repository") */
>>>>>>> ef836af1c19acf10be67bee3f6905098cd8947c5
class Site
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Site", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSite;

    /**
     * @var string
     *
     * @ORM\Column(name="Sujet", type="string", length=15, nullable=false)
     */
    private $sujet;

    /**
     * @var string
     *
     * @ORM\Column(name="Contenu", type="text", length=65535, nullable=false)
     */
    private $contenu;

    function getIdSite() {
        return $this->idSite;
    }

    function getSujet() {
        return $this->sujet;
    }

    function getContenu() {
        return $this->contenu;
    }

    function setIdSite($idSite) {
        $this->idSite = $idSite;
    }

    function setSujet($sujet) {
        $this->sujet = $sujet;
    }

    function setContenu($contenu) {
        $this->contenu = $contenu;
    }


}

