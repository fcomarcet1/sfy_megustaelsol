<?php

namespace App\Controller\Home;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    /*#[Route('/', name: 'home', methods: ['GET'])]*/
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }
}
