<?php

class WindyApi
{
    private $apiKeyCam = 'J8lrm1QEzevtGO5nLI9OuJUvzkZZ7SQp';
    private $apiForecastWeather = '4auH99ROERTFikux10raQfDwFL5frFg5';


    public function getCityCam($latitude,$longitude,$perim): ?array
    {
        $curl = curl_init("https://api.windy.com/api/webcams/v2/list/nearby=". $latitude .','. $longitude .','. $perim ."/limit=20?show=webcams:player,image&key=".$this->apiKeyCam);
        curl_setopt_array($curl,[
            CURLOPT_RETURNTRANSFER=> true,
            CURLOPT_TIMEOUT => 1
        ]);
        $data = curl_exec($curl);
        if($data === false) {
            return null;
        }else {
            $results = [];
            $data = json_decode($data, true);
            foreach ($data['result']['webcams'] as $cam) {
                $results = [
                    'camId' => $cam['id'],
                    'camTitle' => $cam['title'],
                    'camEmbed'=> $cam['player']['day']['embed'],
                    'camLink' => $cam['player']['day']['link']
                ];
            }
            return $results;
        }
    }

    public function getWeather($latitude,$longitude,$perim) : ?array
    {
        $curl = curl_init("https://api.windy.com/api/point-forecast/v2/list/nearby=". $latitude .','. $longitude .','. $perim ."/limit=20?key=".$this->apiForecastWeather);
        curl_setopt_array($curl,[
            CURLOPT_RETURNTRANSFER=> true,
            CURLOPT_TIMEOUT => 1
        ]);
        $data = curl_exec($curl);
        if($data === false) {
            return null;
        }else {
            $results = [];
            $data = json_decode($data, true);
            foreach ($data['result']['webcams'] as $cam) {
                $results = [
                    'camId' => $cam['id'],
                    'camTitle' => $cam['title'],
                    'camEmbed'=> $cam['player']['day']['embed'],
                    'camLink' => $cam['player']['day']['link']
                ];
            }
            return $results;
        }
    }
}
