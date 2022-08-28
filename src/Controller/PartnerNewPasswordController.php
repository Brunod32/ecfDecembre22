<?php

namespace App\Controller;

use App\Entity\Partner;
use App\Form\PartnerNewPasswordType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PartnerNewPasswordController extends AbstractController
{
    #[Route('/partner/newpassword/{id}', name: 'app_partner_new_password')] 
    public function newPassword(
        int $id, 
        Partner $partner, 
        Request $request, 
        ManagerRegistry $doctrine, 
        UserPasswordHasherInterface $userPasswordHasher, 
        EntityManagerInterface $entityManager
    ): Response
    
    {
        // $id = $doctrine->getRepository(Partner::class)->find($id)->getId();
       
        $form = $this->createForm(PartnerNewPasswordType::class, $partner);
        $form->handleRequest($request);

        //Check if from is Submit and valid
        $plainPassword = $form->get('password')->getData();
        if ($form->isSubmitted() && $form->isValid()) {
            $partner->setPassword(
                $userPasswordHasher->hashPassword(
                    $partner,
                    $plainPassword,
                )
            );

            // Save new password
            $entityManager->flush();

            // Redirect to validation page
            return $this->redirectToRoute('app_partner_new_password_validated');
        }

        return $this->render('partner_new_password/newPass.html.twig', [
            'form' => $form->createView(),
            // 'id' => $id,
        ]);
    }

    #[Route('/partner/newpassword-validated', name: 'app_partner_new_password_validated', methods: 'GET')]
    public function newPasswordValidated(): Response
    {
        return $this->render('partner_new_password/validationPassword.html.twig', []);
    }
}
