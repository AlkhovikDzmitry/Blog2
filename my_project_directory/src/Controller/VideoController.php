<?php

namespace App\Controller;

use App\Entity\Video;
use Container7YheZem\getDoctrine_UlidGeneratorService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\ConferenceRepository;
use Twig\Environment;

class VideoController extends AbstractController
{
    #[Route('/video', name: 'app_video')]
    public function Show(ManagerRegistry $doctrine): Response
    {

        $videos = $doctrine->getRepository(Video::class)->findAll();
        // dump($videos);die;

        return $this->render('video/index.html.twig', ['videos' => $videos]);
    }



    #[Route('/show_video/{youtoube_id}', name: 'show_video')]
     
    public function Showonevideo(ManagerRegistry $doctrine, $youtoube_id): Response

    {

        $video = $doctrine->getRepository(Video::class)-> findOneBy(['youtoube_id' => $youtoube_id]);
        //  dump($video);die;

        return $this->render('video/showOneVideo.html.twig', ['video' => $video]);
    }



    
    #[Route('/show_video_by_cat/{category_id}', name: 'show_video_by_cat')]
     
    public function ShowByCategory(ManagerRegistry $doctrine, $category_id): Response

    {

        $videos = $doctrine->getRepository(Video::class)-> findBy(['category_id' => $category_id]);
        //  dump($video);die;

        return $this->render('video/index.html.twig', ['videos' => $videos]);
    }


 
}
