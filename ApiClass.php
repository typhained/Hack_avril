<?php

class WindyApi
{
    private $apiKeyCam = 'J8lrm1QEzevtGO5nLI9OuJUvzkZZ7SQp';


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

//    public function getWeather($latitude,$longitude,$perim) : ?array
//    {
//
//        $curl = curl_init("https://api.windy.com/api/webcams/v2/list/nearby=" . $latitude . ',' . $longitude . ',' . $perim . "/limit=20?show=webcams:player,image&key=" . $this->apiKeyCam);
//        curl_setopt_array($curl, [
//            CURLOPT_RETURNTRANSFER => true,
//
//            CURLOPT_TIMEOUT => 1
//        ]);
//        $data = curl_exec($curl);
//        if ($data === false) {
//            return null;
//        } else {
//            $results = [];
//            $data = json_decode($data, true);
//            foreach ($data['result']['webcams'] as $cam) {
//                $results = [
//                    'camId' => $cam['id'],
//                    'camTitle' => $cam['title'],
//                    'camEmbed' => $cam['player']['day']['embed'],
//                    'camLink' => $cam['player']['day']['link']
//                ];
//            }
//            return $results;
//        }
//    }

    public function getPhoto($id): ?array
    {
        $curl = curl_init("https://api.windy.com/api/webcams/v2/list/webcam=" . $id . "?show=webcams:player,image&key=" . $this->apiKeyCam);
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 1
        ]);
        $data = curl_exec($curl);
        if ($data === false) {
            return null;
        } else {
            $results = [];
            $data = json_decode($data, true);
            foreach ($data['result']['webcams'] as $cam) {
                $results = [
                    'image' => $cam['image']['daylight']['preview']
                ];
            }
            return $results;
        }
    }

    public function getweather(float $lat, float $lng)
    {
        $curl = curl_init("api.openweathermap.org/data/2.5/weather?lat=".$lat."&lon=".$lng."&appid=e7f6120a803061ba4f9c2d3c149bd8cd&units=metric&lang=fr");
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 1
        ]);
        $data = curl_exec($curl);
        if ($data === false) {
            return null;
        } else {
            $data = json_decode($data, true);
                $resultTemp = $data['main']['temp'];
                $resultCity = $data['name'];
                $results= array($resultCity,$resultTemp);
            return $results;
        }

    }
}

