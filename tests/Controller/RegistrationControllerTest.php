<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RegistrationControllerTest extends WebTestCase
{
    public function testSomething(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/register');
        $this->assertResponseIsSuccessful();
        $crawler = $client->submitForm('Inscription', ['nom' => 'Fabien']);
        //$this->assertSelectorTextContains('h1', 'Hello World');
    }
}
