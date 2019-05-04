<?php
namespace App\Service;

class DataService
{
    public function CreateChart()
    {
      $json = json_decode(file_get_contents("https://api.coindesk.com/v1/bpi/currentprice.json"), true); # DEVELOPMENT ONLY
      $exchange = json_decode(file_get_contents("https://api.exchangeratesapi.io/latest?base=USD"), true); # DEVELOPMENT ONLY
      $today = date("Y-m-d");
      $history = json_decode(file_get_contents("https://api.coindesk.com/v1/bpi/historical/close.json?start=2010-07-17&end={$today}"), true);
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
        return $chart;
    }
    public function DownloadData(){
      $exchange = json_decode(file_get_contents("https://api.exchangeratesapi.io/latest?base=USD"), true); # DEVELOPMENT ONLY
      $json = json_decode(file_get_contents("https://api.coindesk.com/v1/bpi/currentprice.json"), true); # DEVELOPMENT ONLY
      $today = date("Y-m-d");
      $history = json_decode(file_get_contents("https://api.coindesk.com/v1/bpi/historical/close.json?start=2010-07-17&end={$today}"), true);
      $yesterday = strtotime ( '-1 day' , strtotime ( $today ) ) ;
      $yesterday = date ( 'Y-m-d' , $yesterday );
      $weekago = strtotime ( '-1 week' , strtotime ( $today ) ) ;
      $weekago = date ( 'Y-m-d' , $weekago );
      $monthago = strtotime ( '-1 month' , strtotime ( $today ) ) ;
      $monthago = date ( 'Y-m-d' , $monthago );
      $json = [
      'usd' => round($json['bpi']['USD']['rate_float'], 0),
      'eur' => round($json['bpi']['USD']['rate_float'] * $exchange['rates']['EUR'], 0),
      'pln' => round($json['bpi']['USD']['rate_float'] * $exchange['rates']['PLN'], 0),
      'gbp' => round($json['bpi']['USD']['rate_float'] * $exchange['rates']['GBP'], 0),
      'jpy' => round($json['bpi']['USD']['rate_float'] * $exchange['rates']['JPY'], 0),
      'chf' => round($json['bpi']['USD']['rate_float'] * $exchange['rates']['CHF'], 0),
      'yesterday' => round((($json['bpi']['USD']['rate_float'] / $history['bpi'][$yesterday]) - 1) * 100, 2),
      'weekago' => round((($json['bpi']['USD']['rate_float'] / $history['bpi'][$weekago]) - 1) * 100, 2),
      'monthago' => round((($json['bpi']['USD']['rate_float'] / $history['bpi'][$monthago]) - 1) * 100, 2)

    ];
    return $json;
    }
}
