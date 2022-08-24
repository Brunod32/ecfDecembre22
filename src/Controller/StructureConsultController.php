<?php

namespace App\Controller;

use App\Entity\Structure;
use App\Repository\StructureRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/structure')]
class StructureConsultController extends AbstractController
{
    #[Route('/structure-consult', name: 'app_structure_consult')]
    public function index(StructureRepository $structureRepository): Response
    {
        return $this->render('structure_consult/index.html.twig', [
            'structures' => $structureRepository->findAll(),
        ]);
    }
}
