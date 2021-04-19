<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdminControllerTest extends WebTestCase
{
    public function testAllUser(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/dashboard/user');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'DashBoard - Users');
    }

    public function testAddLivre(): void{
        $client = static::createClient();
        $crawler = $client->request('GET', '/dashboard/livre/add');
        $this->assertTrue($client->getResponse()->isRedirect('/dashboard/livre/add'));


    }
}
