<?php

namespace App\Controller\Contact;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends AbstractController
{
    public function index(): Response {
        return $this->render('contact/index.html.twig');
    }
}
