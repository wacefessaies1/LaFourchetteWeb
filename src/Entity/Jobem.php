<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jobem
 *
 * @ORM\Table(name="jobem")
 * @ORM\Entity
 */
class Jobem
{
    /**
     * @var string
     *
     * @ORM\Column(name="job_EM", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $jobEm;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_heure", type="integer", nullable=false)
     */
    private $nbHeure;

    public function getJobEm(): ?string
    {
        return $this->jobEm;
    }

    public function getNbHeure(): ?int
    {
        return $this->nbHeure;
    }

    public function setNbHeure(int $nbHeure): self
    {
        $this->nbHeure = $nbHeure;

        return $this;
    }


}
