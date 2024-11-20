<?php 
namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class Unsplash {

   

    public function __construct(private HttpClientInterface $httpClient,  private string $unsplashAccessKey)
    {
       
    }

    public function getBeerImages($perPage = 30)
    {
        //
        $response = $this->httpClient->request(
             // la method HTTP
            'GET', 'https://api.unsplash.com/search/photos',
            // Les options
            [
                // pour ajouter des query params à la requeste 
                "query" => [
                    'query' => 'beer bottle',
                    'client_id' => $this->unsplashAccessKey,
                    'per_page' => $perPage,
                    'orientation' => 'portrait',
                ]
            ]
        );
        $content = $response->toArray();
        return $content["results"];
    }


}
