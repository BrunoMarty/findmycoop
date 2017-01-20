<?php

namespace Forum\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="Message")
 * @ORM\Entity
 */
class Message
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Mess", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMess;

    /**
     * @var string
     *
     * @ORM\Column(name="Sujet_Mess", type="string", length=50, nullable=false)
     */
    private $sujetMess;

    /**
     * @var string
     *
     * @ORM\Column(name="Texte_Mess", type="text", length=65535, nullable=false)
     */
    private $texteMess;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Mess", type="date", nullable=false)
     */
    private $dateMess;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Exp", type="integer", nullable=false)
     */
    private $idExp;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Dest", type="integer", nullable=false)
     */
    private $idDest;


}

