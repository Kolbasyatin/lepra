<?php


namespace App\Api;


class Api
{
    private const API_URL = 'https://leprosorium.ru/api/';

    /** @var ApiClientInterface */
    private $client;

    /**
     * Api constructor.
     * @param ApiClientInterface $client
     */
    public function __construct(ApiClientInterface $client)
    {
        $this->client = $client;
    }


}