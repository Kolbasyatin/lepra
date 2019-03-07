<?php


namespace App\Api;


use GuzzleHttp\Client;

class LepraApiClient implements ApiClientInterface
{
    protected const API_URL = 'https://leprosorium.ru/api/';

    /** @var Client */
    private $httpClient;

    /**
     * LepraApiClient constructor.
     * @param Client $httpClient
     */
    public function __construct(Client $httpClient)
    {
        $this->httpClient = $httpClient;
    }


    public function get(string $endPoint, array $data = [])
    {
        // TODO: Implement get() method.
    }

    public function post(string $endPoint, array $data = [])
    {
        // TODO: Implement post() method.
    }

    public function patch(string $endPoint, array $data = [])
    {
        // TODO: Implement patch() method.
    }

    public function delete(string $endPoint, array $data = [])
    {
        // TODO: Implement delete() method.
    }

}

