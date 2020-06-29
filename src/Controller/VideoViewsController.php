<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\VideoRepository;


class VideoViewsController extends AbstractController
{
    
    /**
    * @Route("/")
    */
    public function allVideos(VideoRepository $videoRepository): Response
    {   

        return $this->render('video_gallery.html.twig',
            [
                'videos'=>$videoRepository->findAll()
            ]);
    }



    
    /**
    * @Route("/video/{alias}")
    */
    public function singleVideo(VideoRepository $videoRepository,$alias): Response
    {
        return $this->render('single_video.html.twig',
            [
                'video' => $videoRepository->findOneBy(['alias' => $alias])
            ]
        );
    }
}