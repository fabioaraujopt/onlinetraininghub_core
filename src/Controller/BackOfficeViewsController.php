<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class BackOfficeViewsController extends AbstractController
{
    
    /**
    * @Route("/backoffice")
    */
    public function home(): Response
    {
        return $this->render('portfolio.html.twig');
    }


    #todo create client vpn to access vpc

    #add backoffice page to insert a news 

    #add backoffice page to inset a video 

    #add backoffice page to insert a category

    #add backoffice page to create a lesson based on videos (to hard) 


}