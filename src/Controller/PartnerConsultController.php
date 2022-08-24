<?php

namespace App\Controller;

use App\Repository\PartnerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/partner')]
class PartnerConsultController extends AbstractController
{
    #[Route('/partner-consult', name: 'app_partner_consult')]
    public function index(PartnerRepository $partnerRepository): Response
    {
        return $this->render('partner_consult/index.html.twig', [
            'partners' => $partnerRepository->findAll(),
        ]);
    }
}
