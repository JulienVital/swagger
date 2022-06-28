<?php

namespace App\Entity;

use App\Repository\VoitureRepository;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlAttribute;
use OpenApi\Annotations as OA;

#[ORM\Entity(repositoryClass: VoitureRepository::class)]
/** @XmlRoot("user") */
class Voiture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $roue;

    #[ORM\Column(type: 'string', length: 255)]
    /**
     *
     *@OA\Property(@OA\Xml(attribute=true) )    */
    private $couleur;

    #[ORM\Column(type: 'integer')]
    /** @XmlAttribute
     *
     */
    private $passager = 12;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRoue(): ?int
    {
        return $this->roue;
    }

    public function setRoue(int $roue): self
    {
        $this->roue = $roue;

        return $this;
    }

    public function getCouleur(): ?string
    {
        return $this->couleur;
    }

    public function setCouleur(string $couleur): self
    {
        $this->couleur = $couleur;

        return $this;
    }

    public function getPassager(): ?int
    {
        return $this->passager;
    }

    public function setPassager(int $passager): self
    {
        $this->passager = $passager;

        return $this;
    }
}
