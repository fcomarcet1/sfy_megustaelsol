<?php

namespace App\Controller\AboutUs;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AboutUsController extends AbstractController
{
    public function index(): Response {
        return $this->render('about_us/index.html.twig');
    }
}
