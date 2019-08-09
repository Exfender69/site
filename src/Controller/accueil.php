<?php
// src/Controller/AdvertController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

/**
 * @Route("/advert", name="oc_advert_index")
 */

class accueil
{
    public function index(Environnement $twig)
    {
        $content = $twig->render('base.html.twig');

    return new Response($content);
  }
}