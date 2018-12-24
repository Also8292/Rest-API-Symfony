<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ProjetsTechnosRepository")
 */
class ProjetsTechnos
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $idProjets;

    /**
     * @ORM\Column(type="integer")
     */
    private $idTechno;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdProjets(): ?int
    {
        return $this->idProjets;
    }

    public function setIdProjets(int $idProjets): self
    {
        $this->idProjets = $idProjets;

        return $this;
    }

    public function getIdTechno(): ?int
    {
        return $this->idTechno;
    }

    public function setIdTechno(int $idTechno): self
    {
        $this->idTechno = $idTechno;

        return $this;
    }
}
