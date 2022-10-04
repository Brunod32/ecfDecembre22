<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ErrorController extends AbstractController
{
    #[Route('/error403', name: 'app_error_403')]
    public function error403(): Response
    {
        return $this->render('error/error403.html.twig');
    }

    #[Route('/error404', name: 'app_error_404')]
    public function error404(): Response
    {
        return $this->render('error/error404.html.twig');
    }
}
