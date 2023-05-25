<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    #[Route('/', name: 'app_pages')]
    public function index(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

    #[Route('/accueil', name: 'app_accueil')]
    public function accueil(): Response
    {
        return $this->render('pages/accueil.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

    #[Route('/produit', name: 'app_product')]
    public function poduct(): Response
    {
        return $this->render('pages/produit.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('pages/contact.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

    #[Route('/addProduit', name: 'app_addProduit')]
    public function addProduit(): Response
    {
        return $this->render('pages/addproduit.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
}
