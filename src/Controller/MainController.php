<?php

namespace App\Controller;

use App\Service\DataService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(): Response
    {
        $DataService = new DataService();

        return $this->render('index.html.twig', [
            'chart' => $DataService->CreateChart(),
        ]);
    }

    /**
     * @Route("/data", name="data")
     */
    public function data(): JsonResponse
    {
        $DataService = new DataService();

        return new JsonResponse($DataService->DownloadData());
    }
}
