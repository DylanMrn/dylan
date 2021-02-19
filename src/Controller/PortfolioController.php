<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class PortfolioController
{
    /**
     * @Route("/portfolio", name="portfolio")
     */
    public function index(Environment $twig)
    {        
        $content = $twig->render('portfolio/index.html.twig');
        return new Response($content);
    }
}