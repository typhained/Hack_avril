<?php

class WindyApi
{
    private $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function getCityCam($latitude,$longitude,$perim): ?array
    {
//        https://api.windy.com/api/webcams/v2/list/nearby=43.17,5.6,20/limit=20?show=webcams:player,image&key=J8lrm1QEzevtGO5nLI9OuJUvzkZZ7SQp
        $curl = curl_init("https://api.windy.com/api/webcams/v2/list/nearby=". $latitude .','. $longitude .','. $perim ."/limit=20?show=webcams:player,image&key=".$this->apiKey);
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
