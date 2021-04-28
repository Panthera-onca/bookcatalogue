<?php

namespace App\Tests\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\DomCrawler\Crawler;

class RegistrationControllerTest extends WebTestCase
{
    public function testFormSubmission(): void
    {
        $client = static ::createClient();
        $csrfToken = $client->getContainer()->get('security.csrf.token_manager')->getToken('authenticate');
        $client->request('GET', '/register');
        $crawler = $client->submitForm('Inscription', ['_csrf_token' => $csrfToken,
            'username' => 'Nikolay',
            'email' => 'talai@mail.com',
            'plainPassword' => '12345',
            'nom' => 'Fabien',
            'prenom' => 'Jane',
            'roles' => 'ROLE_USER']);

        $this->assertTrue($client->getResponse()->isSuccessful());

        //$this->assertSelectorTextContains('h1', 'Hello World');
    }

    public function testRegister()
    {
        $client = static ::createClient();


        $csrfToken = $client->getContainer()->get('security.csrf.token_manager')->getToken('authenticate');
        $client->request('GET', '/register', [
            '_csrf_token' => $csrfToken,
            'username' => 'Nikolay',
            'email' => 'talai@mail.com',
            'plainPassword' => '12345',
            'nom' => 'Fabien',
            'prenom' => 'Jane',
            'roles' => 'ROLE_USER'


        ]);
        $this->assertResponseRedirects('/livre/');

    }
}
