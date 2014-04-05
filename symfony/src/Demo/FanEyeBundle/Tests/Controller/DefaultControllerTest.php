<?php

namespace Demo\FanEyeBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertTrue($crawler->filter('html:contains("It\'s time to vote!")')->count() == 1);
        $this->assertTrue($crawler->filter('html:contains("vs")')->count() == 1);
        $this->assertTrue($crawler->filter('html:contains("Current Top 5")')->count() == 1);
    }
}
