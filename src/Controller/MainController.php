<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Service\DataService;
class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index()
    {
      $DataService = new DataService();
        return $this->render('index.html.twig', [
            'chart' => $DataService->CreateChart(),
        ]);
    }
    /**
     * @Route("/data", name="data")
     */
    public function data()
    {
        $DataService = new DataService();
        return new JsonResponse($DataService->DownloadData());
    }
}
