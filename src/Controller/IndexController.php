<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;


class IndexController
{
    /**
     * @Route ("/")
     */
    public function index(Environment $twig)
    {
        return new Response($twig->render('index/index.html.twig'));
}   }