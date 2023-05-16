<?php

namespace App\Controller;
use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
class CategoryController extends AbstractController
{
    #[Route('/category', name: 'app_category')]
    public function showCategory(ManagerRegistry $doctrine): Response
    {
        $categories = $doctrine->getRepository(Category::class)-> findAll();
        //  dump($video);die;

        return $this->render('category/index.html.twig', ['categories' => $categories]);
    }
}
