<?php

declare(strict_types=1);

namespace App\Controller;

use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @Route("/")
     * @return Response
     * @throws Exception
     */
    public function home(): Response
    {
        $number = random_int(0, 100);

        return $this->render('/user/home.html.twig', [
            'number' => $number
        ]);
    }

}