<?php

namespace Forum\Entity;
<<<<<<< HEAD

=======
>>>>>>> ef836af1c19acf10be67bee3f6905098cd8947c5
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
<<<<<<< HEAD
     * @var Collection $codePostal
    
=======
     * @var integer
     *
>>>>>>> ef836af1c19acf10be67bee3f6905098cd8947c5
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

<<<<<<< HEAD
 /* On récupère le champ Nom du tableau Ville */
  public function __toString() 
    {
        return $this->getNomVille();
    }
=======
        public function __toString()
    {
        return $this->getCodePostal();  
        }

>>>>>>> ef836af1c19acf10be67bee3f6905098cd8947c5
}

