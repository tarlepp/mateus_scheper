<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index()
    {
        $response = $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);

        dump($response);

        return $response;
    }
}
