<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction()
    {
        return $this->render('security/login.html.twig');
    }


    /**
     * @Route("/logout")
     * @throws \RuntimeException
     */
    public function logoutAcion() {
        throw new \RuntimeException('This should never be called directly.');
    }
}
