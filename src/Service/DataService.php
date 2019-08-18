<?php

namespace App\Service;

class DataService
{
    public function CreateChart(): array
    {
        $json = json_decode(file_get_contents('https://api.coindesk.com/v1/bpi/currentprice.json'), true);
        $today = date('Y-m-d');
        $history = json_decode(file_get_contents("https://api.coindesk.com/v1/bpi/historical/close.json?start=2010-07-17&end={$today}"), true);

        $chart = [
            $history['bpi'][date('Y-m-d', strtotime('-6 month', strtotime($today)))],
            $history['bpi'][date('Y-m-d', strtotime('-3 month', strtotime($today)))],
            $history['bpi'][date('Y-m-d', strtotime('-2 month', strtotime($today)))],
            $history['bpi'][date('Y-m-d', strtotime('-1 month', strtotime($today)))],
            $history['bpi'][date('Y-m-d', strtotime('-3 week', strtotime($today)))],
            $history['bpi'][date('Y-m-d', strtotime('-2 week', strtotime($today)))],
            $history['bpi'][date('Y-m-d', strtotime('-1 week', strtotime($today)))],
            $history['bpi'][date('Y-m-d', strtotime('-6 day', strtotime($today)))],
            $history['bpi'][date('Y-m-d', strtotime('-5 day', strtotime($today)))],
            $history['bpi'][date('Y-m-d', strtotime('-4 day', strtotime($today)))],
            $history['bpi'][date('Y-m-d', strtotime('-3 day', strtotime($today)))],
            $history['bpi'][date('Y-m-d', strtotime('-2 day', strtotime($today)))],
            $history['bpi'][date('Y-m-d', strtotime('-1 day', strtotime($today)))],
            $json['bpi']['USD']['rate_float'],
        ];

        return $chart;
    }

    public function DownloadData()
    {
        $exchange = json_decode(file_get_contents('https://api.exchangeratesapi.io/latest?base=USD'), true);
        $json = json_decode(file_get_contents('https://api.coindesk.com/v1/bpi/currentprice.json'), true);
        $today = date('Y-m-d');
        $history = json_decode(file_get_contents("https://api.coindesk.com/v1/bpi/historical/close.json?start=2017-07-17&end={$today}"), true);
        $yesterday = strtotime('-1 day', strtotime($today));
        $yesterday = date('Y-m-d', $yesterday);
        $weekago = strtotime('-1 week', strtotime($today));
        $weekago = date('Y-m-d', $weekago);
        $monthago = strtotime('-1 month', strtotime($today));
        $monthago = date('Y-m-d', $monthago);
        $yearago = strtotime('-1 year', strtotime($today));
        $yearago = date('Y-m-d', $yearago);
        $json = [
            'usd' => round($json['bpi']['USD']['rate_float']),
            'eur' => round($json['bpi']['USD']['rate_float'] * $exchange['rates']['EUR']),
            'pln' => round($json['bpi']['USD']['rate_float'] * $exchange['rates']['PLN']),
            'gbp' => round($json['bpi']['USD']['rate_float'] * $exchange['rates']['GBP']),
            'jpy' => round($json['bpi']['USD']['rate_float'] * $exchange['rates']['JPY']),
            'chf' => round($json['bpi']['USD']['rate_float'] * $exchange['rates']['CHF']),
            'yesterday' => round((($json['bpi']['USD']['rate_float'] / $history['bpi'][$yesterday]) - 1) * 100, 2),
            'weekago' => round((($json['bpi']['USD']['rate_float'] / $history['bpi'][$weekago]) - 1) * 100, 2),
            'monthago' => round((($json['bpi']['USD']['rate_float'] / $history['bpi'][$monthago]) - 1) * 100, 2),
            'yearago' => round((($json['bpi']['USD']['rate_float'] / $history['bpi'][$yearago]) - 1) * 100, 2),
        ];

        return $json;
    }
}
