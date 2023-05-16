<?php

namespace App\Controller;

use App\Entity\Page;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;


class PageController extends AbstractController
{
    #[Route('/page', name: 'home_page')]
    public function index(ManagerRegistry $doctrine): Response
   
    {

        $entityManager = $doctrine->getManager();
        $page = new Page();
        $page->setKeywords(keywords: 'Любимые видео')
        ->setTitle(title: 'Любимые видео')
        ->setContent(content: 'Сайт для добавления видео')
        ->setDescription(description: 'Любимые видео');
        


        $entityManager->persist($page);
        $entityManager->flush();
    

        
            
        $homePage = $doctrine->getRepository(Page::class)->find(1);
        
        //  dump($homePage);die;
        return $this->render('page/index.html.twig', ['homePage' => $homePage]);
               
            }
}


                
               
            
        

       
      
    

        


    //  $homePage = $this->$doctrine()->getRepository()->find(1);
    

    // return $this->render('page/index.html.twig', ['namePage'=> $namePage]);  
    


   
   
    

