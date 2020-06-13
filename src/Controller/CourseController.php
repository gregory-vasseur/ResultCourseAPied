<?php
namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CourseController extends AbstractController
{
    /**
     * Undocumented function
     * @Route("/course",name="course.index")
     * @return Response
     */
    public function index() :Response
    {
        return $this->render("course/index.html.twig", [
            "courrent_menu" => "course"
        ]);
    }
    
}

