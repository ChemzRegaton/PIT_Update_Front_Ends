<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;


class GatewayController extends Controller
{
    
    public function getNews()
    {

        $newsData = json_decode($this->fetchNewsFromAPI(), true);
    
        
        return view('getNews', ['newsData' => $newsData]);
    }


    private function fetchNewsFromAPI()
    {
        
        $response = $client->request('GET', 'https://news-api14.p.rapidapi.com/top-headlines', [
            'headers' => [
                'X-RapidAPI-Host' => 'news-api14.p.rapidapi.com',
                'X-RapidAPI-Key' => '983b4f923emsh17584e3a8986231p1fa806jsnc56a0e308f2d',
            ],
            'query' => [
                'country' => 'us',
                'language' => 'en',
                'pageSize' => 10,
                'category' => 'sports'
            ]
        ]);

        return $response->getBody()->getContents();
    }



public function googleSearch()
{
    
    $response = Http::post('https://google-api31.p.rapidapi.com/websearch', [
        "text" => "Google",
        "safesearch" => "off",
        "timelimit" => "",
        "region" => "wt-wt",
        "max_results" => 20
    ])->json();
    return view('googleSearch', ['searchResults' => $response]);
}


public function getWeather()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://ai-weather-by-meteosource.p.rapidapi.com/time_machine?lat=37.81021&lon=-122.42282&date=2021-08-24&units=auto', [
            'headers' => [
                'x-rapidapi-host' => 'ai-weather-by-meteosource.p.rapidapi.com',
                'x-rapidapi-key' => 'f3531f556fmsh1bad905a72061ecp1447a2jsn2d94cd11d1ec',
            ],
        ]);

        $weatherData = json_decode($response->getBody(), true);

        return view('weather', ['weatherData' => $weatherData]);
    }


public function getRandomQuote()
{
    $response = Http::get('https://get-quotes-api.p.rapidapi.com/random', [
        'headers' => [
            'x-rapidapi-host' => 'get-quotes-api.p.rapidapi.com',
            'x-rapidapi-key' => '4123b0a04dmsh6904a8dcecad229p17ba38jsndcdfb75e3498',
        ],
    ])->json();
    return view('randomQuote', ['quoteData' => $response]);
}

}



