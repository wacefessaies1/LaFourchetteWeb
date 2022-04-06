<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fournisseur
 *
 * @ORM\Table(name="fournisseur")
 * @ORM\Entity
 */
class Fournisseur
{
    /**
     * @var int
     *
     * @ORM\Column(name="idF", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idf;

    /**
     * @var string
     *
     * @ORM\Column(name="nomF", type="string", length=255, nullable=false)
     */
    private $nomf;

    /**
     * @var int
     *
     * @ORM\Column(name="telephoneF", type="integer", nullable=false)
     */
    private $telephonef;

    /**
     * @var string
     *
     * @ORM\Column(name="emailF", type="string", length=255, nullable=false)
     */
    private $emailf;

    /**
     * @var int
     *
     * @ORM\Column(name="lvl", type="integer", nullable=false)
     */
    private $lvl;

    public function getIdf(): ?int
    {
        return $this->idf;
    }

    public function getNomf(): ?string
    {
        return $this->nomf;
    }

    public function setNomf(string $nomf): self
    {
        $this->nomf = $nomf;

        return $this;
    }

    public function getTelephonef(): ?int
    {
        return $this->telephonef;
    }

    public function setTelephonef(int $telephonef): self
    {
        $this->telephonef = $telephonef;

        return $this;
    }

    public function getEmailf(): ?string
    {
        return $this->emailf;
    }

    public function setEmailf(string $emailf): self
    {
        $this->emailf = $emailf;

        return $this;
    }

    public function getLvl(): ?int
    {
        return $this->lvl;
    }

    public function setLvl(int $lvl): self
    {
        $this->lvl = $lvl;

        return $this;
    }


}
