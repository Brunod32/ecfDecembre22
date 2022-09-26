<?php

namespace App\Controller;

use App\Entity\Partner;
use App\Entity\Structure;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/mail')]
class MailController extends AbstractController
{
    #[Route('/creation/{idPartner}', name: 'app_mail_partner_creation')]
    public function creationPartnerMail(int $idPartner, ManagerRegistry $doctrine): Response
    {
        // Get the partner
        $partner = $doctrine->getRepository(Partner::class)->find($idPartner);
        
        return $this->render('mail/creationPartnerAccountMail.html.twig', [
            'newsletter_date' => new \DateTime(),
            'partner' => $partner,
        ]);
    }

    #[Route('/permissions/{idPartner}', name: 'app_mail_partner_perms')]
    public function ChangingPermsPartner(int $idPartner, ManagerRegistry $doctrine): Response
    {
        // Get the partner
        $partner = $doctrine->getRepository(Partner::class)->find($idPartner);
        
        return $this->render('mail/updatePartnerAccountMail.html.twig', [
            'newsletter_date' => new \DateTime(),
            'partner' => $partner,
        ]);
    }

    #[Route('/creation/{idStructure}', name: 'app_mail_structure_creation')]
    public function creationStructureMail(int $idStructure, ManagerRegistry $doctrine): Response
    {
        // Get the structure
        $structure = $doctrine->getRepository(Structure::class)->find($idStructure);
        
        return $this->render('mail/creationStructureAccountMail.html.twig', [
            'newsletter_date' => new \DateTime(),
            'structure' => $structure,
        ]);
    }

    #[Route('/permissions/{idStructure}', name: 'app_mail_structure_perms')]
    public function ChangingPermsStructure(int $idStructure, ManagerRegistry $doctrine): Response
    {
        // Get the Structure
        $structure = $doctrine->getRepository(Structure::class)->find($idStructure);
        
        return $this->render('mail/updateStructureAccountMail.html.twig', [
            'newsletter_date' => new \DateTime(),
            'structure' => $structure,
        ]);
    }
}
