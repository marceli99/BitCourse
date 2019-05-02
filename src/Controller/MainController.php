<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index()
    {
      $exchange = json_decode(file_get_contents("https://api.exchangeratesapi.io/latest"), true);
      $json = json_decode(file_get_contents("https://api.coindesk.com/v1/bpi/currentprice.json"), true);
      $pln = $json['bpi']['EUR']['rate_float'] * $exchange['rates']['PLN'];
      $history = json_decode(file_get_contents("https://api.coindesk.com/v1/bpi/historical/close.json"), true);
      $history = $history['bpi']['2019-05-01'];
        return $this->render('index.html.twig', [
            'usd' => $json['bpi']['USD']['rate_float'],
            'gbp' => $json['bpi']['GBP']['rate_float'],
            'eur' => $json['bpi']['EUR']['rate_float'],
            'pln' => $json['bpi']['EUR']['rate_float'] * $exchange['rates']['PLN'],
            'history' => $history

        ]);
    }
}
