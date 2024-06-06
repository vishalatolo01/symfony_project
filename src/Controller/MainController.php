<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
   // #[Route('/main', name: 'app_main', methods:['GET'])]
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    //#[Route('/start', name: 'app_start',methods:['GET'])]
    public function start()
    {
        return new Response('<h1>Hello World</h1>');
    }
}
