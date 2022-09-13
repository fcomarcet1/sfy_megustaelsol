<?php

namespace App\Controller\News;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewsController extends AbstractController
{
    /*#[Route('/news', name: 'news', methods: ['GET'])]*/
    public function index(): Response
    {
        return $this->render('news/index.html.twig');
    }
}
