<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AuthController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('auth/login.html.twig', [
            'title' => 'Login',
        ]);
    }

    //login view
    public function indexLogin(): Response
    {
        return $this->render('auth/login.html.twig', [
            'title' => 'Login',
        ]);
    }
}
