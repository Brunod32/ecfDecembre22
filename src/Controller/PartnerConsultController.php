<?php

namespace App\Controller;

use App\Entity\Partner;
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

    #[Route('/partner-consult/{id}', name: 'app_partner_consult_show', methods: ['GET'])]
    public function show(Partner $partner): Response
    {
        return $this->render('partner/show.html.twig', [
            'partner' => $partner,
        ]);
    }
}
