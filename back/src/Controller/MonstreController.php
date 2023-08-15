<?php

namespace App\Controller;

use App\Entity\Monstre;
use App\Repository\MonstreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route("/api", name:"api_")]
class MonstreController extends AbstractController
{
    public function __construct( ){}

    #[Route("/monstre/infos", name:"monstre_infos")]
    public function getMonstresInfoForSelect(MonstreRepository $monstreRepository): Response {
        $pnjInfos = $monstreRepository->findAllAssoc();
        return new Response(json_encode($pnjInfos));
    }

    #[Route("/monstre/create", name:"monstre_create")]
    public function createMonster(Request $request, EntityManagerInterface $entityManager): Response {
        $data = json_decode($request->getContent(), true);
        $monstre = $data['monstre'];
        $monstreEntity = new Monstre();

        $monstreEntity->setName($monstre['name']);
        $monstreEntity->setMaxLife($monstre['maxLife']);
        $monstreEntity->setSkin($monstre['skin']);
        $monstreEntity->setTempsRepop($monstre['tempsRepop']);
        $monstreEntity->setPuissance($monstre['puissance']);

        $entityManager->persist($monstreEntity);
        $entityManager->flush();

        return new Response(json_encode("ok"));
    }

}
