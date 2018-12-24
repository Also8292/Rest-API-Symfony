<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ArticlesCategoriesRepository")
 */
class ArticlesCategories
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
    private $idProjet;

    /**
     * @ORM\Column(type="integer")
     */
    private $idTechno;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdProjet(): ?int
    {
        return $this->idProjet;
    }

    public function setIdProjet(int $idProjet): self
    {
        $this->idProjet = $idProjet;

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
