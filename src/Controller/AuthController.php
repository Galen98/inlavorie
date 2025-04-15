<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
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

    //register view
    public function indexRegister(): Response
    {
        return $this->render('auth/register.html.twig', [
            'title' => 'Register',
        ]);
    }

    public function handleLogin(Request $request)
    {

    }
}
