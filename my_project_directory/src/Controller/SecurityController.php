<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
    

    #[Route('/logout', name: 'app_logout')]
    public function logout(): Response
    {
        return $this->render('registration/register.html.twig', [
            'controller_name' => 'RegistrationController',
        ]);
    }
}


// #[Route('/logout', name: 'app_logout')]
// public function logout(): Response
// {
//     throw new \LogicException('этот метод поможет выйти из logouta');
// }
