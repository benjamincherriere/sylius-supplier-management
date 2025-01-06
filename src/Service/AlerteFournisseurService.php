<?php

namespace App\Service;

use App\Repository\FournisseurRepository;
use Doctrine\ORM\EntityManagerInterface;

class AlerteFournisseurService
{
    private $fournisseurRepository;
    private $entityManager;

    public function __construct(FournisseurRepository $fournisseurRepository, EntityManagerInterface $entityManager)
    {
        $this->fournisseurRepository = $fournisseurRepository;
        $this->entityManager = $entityManager;
    }

    public function getFournisseursAContacter($mois = 24)
    {
        $dateLimite = new \DateTime("-{$mois} months");
        return $this->fournisseurRepository->createQueryBuilder('f')
            ->where('f.dernierRendezVous < :dateLimite OR f.dernierRendezVous IS NULL')
            ->setParameter('dateLimite', $dateLimite)
            ->getQuery()
            ->getResult();
    }
}