<?php
// src/Controller/AdvertController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

/**
 * @Route("/advert", name="oc_advert_index")
 */

class accueil
{
    public function index(Environment $twig)
    {
        $content = $twig->render('base.html.twig');
        return new Response($content);
  }
}