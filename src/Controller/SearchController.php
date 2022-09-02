<?php

namespace App\Controller;

use App\Repository\PartnerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    // #[Route('/partner-search/{id}', name: 'app_partner_search', methods: ['GET'])]
    // public function search($id, PartnerRepository $partnerRepository): Response
    // {
    //     $partnerSearch = $partnerRepository->find($id);
    //     return $this->render('search/index.html.twig', [
    //         'partnerSearch' => $partnerSearch
    //     ]);
    // }

    #[Route('/search', name: 'app_search')]
    public function index(Request $request, PartnerRepository $partnerRepository): Response
    {
        $search = $request->query->get('search');
        $partnersSearches = $partnerRepository->searchPartner($search);
        
        return $this->render('search/index.html.twig', [
            'partnersSearches' => $partnersSearches,
            'search' => $search
        ]);
    }
}
