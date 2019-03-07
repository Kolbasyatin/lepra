<?php

namespace App\Tests\Api;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LepraApiClientTest extends WebTestCase
{
    private $service;

    protected function setUp()
    {
        parent::setUp();
        self::bootKernel();
        $this->service = self::$container->get('app.test.lepra_api_client');
    }


    public function testGet()
    {
        $a = 'b';
    }

    public function testPost()
    {

    }

    public function testPatch()
    {

    }

    public function testDelete()
    {

    }
}
