<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Resource\Model\ResourceInterface;

#[ORM\Entity]
class RendezVous implements ResourceInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: Fournisseur::class, inversedBy: 'rendezVous')]
    private $fournisseur;

    #[ORM\Column(type: 'datetime')]
    private $date;

    #[ORM\Column(type: 'text', nullable: true)]
    private $notes;

    #[ORM\Column(type: 'boolean')]
    private $estPasse = false;

    public function getId(): ?int
    {
        return $this->id;
    }

    // Autres getters et setters...
}