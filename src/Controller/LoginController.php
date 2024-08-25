<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LoginController extends AbstractController
{
    #[Route('/auth/safename', name: 'auth_safename')]
    public function index(): Response
    {
        return $this->render('login/safename.html.twig', [
            'currentYear' => (new \DateTime())->format('Y')
        ]);
    }

    #[Route('/auth/login/{safeName?}', name: 'auth_login')]
    public function login(Request $request): Response
    {
        $safeName = $request->get('safeName');

        return $this->render('login/index.html.twig', [
            'currentYear' => (new \DateTime())->format('Y'),
            'safeName' => $safeName
        ]);
    }
}
