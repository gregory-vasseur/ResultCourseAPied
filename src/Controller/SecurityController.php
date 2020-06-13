<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SecurityController extends AbstractController
{

    /**
     * Undocumented function
     * @Route("/", name="login")
     * @return Response
     */
    public function login() : Response
    {
        return $this->render('security/login.html.twig');
    }

}