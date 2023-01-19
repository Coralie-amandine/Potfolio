<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PortfolioController extends AbstractController
{
    #[Route('/portfolio', name: 'app_portfolio')]
    public function index(): Response
    {
        return $this->render('portfolio/index.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
    #[Route('/portfolio/projects', name: 'app_portfolio_formulaire')]
    public function formulaire(): Response
    {
        return $this->render('./formulaire.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
        
    }
    
    #[Route('/portfolio/CV', name: 'app_portfolio_CV')]
    public function CV(): Response
    {
        return $this->render('portfolio/CV.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
        
    }
    #[Route('/portfolio/profils', name: 'app_portfolio_profils')]
    public function mon_profils(): Response
    {
        return $this->render('portfolio/profils.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
        
    }
    #[Route('/portfolio/Portfolio', name: 'app_portfolio_Portfolio')]
    public function Portfolio(): Response
    {
        return $this->render('portfolio/Portfolio.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
        
    }
}
