<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function home(): Response
    {
        return $this->render('main/index.html.twig');
    }

    #[Route('/about_us', name: 'app_about_us')]
    public function renderAboutUs(): Response
    {
        return $this->render('main/about-us.html.twig');
    }
}
