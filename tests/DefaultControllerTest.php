<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testRoutes()
    {
        $client = static::createClient();
        $client->request('GET', '/');
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
    }
}
