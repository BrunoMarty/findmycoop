<?php

namespace Forum\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 *
 * @ORM\Table(name="Ville")
 * @ORM\Entity
 */
class Ville
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Postal", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Ville", type="string", length=255, nullable=false)
     */
    private $nomVille;
    function getCodePostal() {
        return $this->codePostal;
    }

    function getNomVille() {
        return $this->nomVille;
    }

    function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
    }

    function setNomVille($nomVille) {
        $this->nomVille = $nomVille;
    }

        public function __toString()
    {
        return $this->getCodePostal();  
        }

}

