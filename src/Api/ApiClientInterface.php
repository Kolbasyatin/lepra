<?php


namespace App\Api;


interface ApiClientInterface
{
    public function get(string $endPoint, array $data = []);

    public function post(string $endPoint, array $data = []);

    public function patch(string $endPoint, array $data = []);

    public function delete(string $endPoint, array $data = []);
}