<?php

namespace App\Controller;

use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/signup', name: 'user.signup')]
    public function signup(): Response
    {
        $form = $this->createForm(UserType::class);
        return $this->render('user/signup.html.twig',[
        'form' => $form->createView()
        ]);
    }
}
