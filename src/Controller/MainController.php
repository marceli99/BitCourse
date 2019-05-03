<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index()
    {
      $exchange = json_decode(file_get_contents("https://api.exchangeratesapi.io/latest?base=USD"), true);
      $json = json_decode(file_get_contents("https://api.coindesk.com/v1/bpi/currentprice.json"), true);
      $pln = $json['bpi']['EUR']['rate_float'] * $exchange['rates']['PLN'];
      $today = date("Y-m-d");
      $history = json_decode(file_get_contents("https://api.coindesk.com/v1/bpi/historical/close.json?start=2010-07-17&end={$today}"), true);
      $yesterday = strtotime ( '-1 day' , strtotime ( $today ) ) ;
      $yesterday = date ( 'Y-m-d' , $yesterday );
      $weekago = strtotime ( '-1 week' , strtotime ( $today ) ) ;
      $weekago = date ( 'Y-m-d' , $weekago );
      $monthago = strtotime ( '-1 month' , strtotime ( $today ) ) ;
      $monthago = date ( 'Y-m-d' , $monthago );
      $yesterday = round((($json['bpi']['USD']['rate_float'] / $history['bpi'][$yesterday]) - 1) * 100, 2);
      $weekago = round((($json['bpi']['USD']['rate_float'] / $history['bpi'][$weekago]) - 1) * 100, 2);
      $monthago = round((($json['bpi']['USD']['rate_float'] / $history['bpi'][$monthago]) - 1) * 100, 2);
      $chart = [
        $history['bpi'][date ( 'Y-m-d' , strtotime ( '-6 year' , strtotime ( $today ) ) )],
        $history['bpi'][date ( 'Y-m-d' , strtotime ( '-5 year' , strtotime ( $today ) ) )],
        $history['bpi'][date ( 'Y-m-d' , strtotime ( '-4 year' , strtotime ( $today ) ) )],
        $history['bpi'][date ( 'Y-m-d' , strtotime ( '-3 year' , strtotime ( $today ) ) )],
        $history['bpi'][date ( 'Y-m-d' , strtotime ( '-2 year' , strtotime ( $today ) ) )],
        $history['bpi']['2017-12-16'],
        $history['bpi'][date ( 'Y-m-d' , strtotime ( '-1 year' , strtotime ( $today ) ) )],
        $history['bpi'][date ( 'Y-m-d' , strtotime ( '-6 month' , strtotime ( $today ) ) )],
        $history['bpi'][date ( 'Y-m-d' , strtotime ( '-3 month' , strtotime ( $today ) ) )],
        $history['bpi'][date ( 'Y-m-d' , strtotime ( '-2 month' , strtotime ( $today ) ) )],
        $history['bpi'][date ( 'Y-m-d' , strtotime ( '-1 month' , strtotime ( $today ) ) )],
        $history['bpi'][date ( 'Y-m-d' , strtotime ( '-3 week' , strtotime ( $today ) ) )],
        $history['bpi'][date ( 'Y-m-d' , strtotime ( '-2 week' , strtotime ( $today ) ) )],
        $history['bpi'][date ( 'Y-m-d' , strtotime ( '-1 week' , strtotime ( $today ) ) )],
        $history['bpi'][date ( 'Y-m-d' , strtotime ( '-3 day' , strtotime ( $today ) ) )],
        $history['bpi'][date ( 'Y-m-d' , strtotime ( '-2 day' , strtotime ( $today ) ) )],
        $history['bpi'][date ( 'Y-m-d' , strtotime ( '-1 day' , strtotime ( $today ) ) )],
        $json['bpi']['USD']['rate_float']
    ];
      $history = $history['bpi']['2019-05-01'];
        return $this->render('index.html.twig', [
            'usd' => $json['bpi']['USD']['rate_float'],
            'history' => $history,
            'yesterday' => $yesterday,
            'weekago' => $weekago,
            'monthago' => $monthago,
            'chart' => $chart,
            'exchange' => $exchange
        ]);
    }
    /**
     * @Route("/refresh", name="refresh")
     */
    public function refresh()
    {

      $repository = $this->getDoctrine()->getRepository(Article::class);
      $article = $repository->findBy(array(), array('id' => 'DESC'), $this->getParameter('articles_per_page'), $this->getParameter('articles_per_page') * $page);
      return new JsonResponse($article);
    }
}
