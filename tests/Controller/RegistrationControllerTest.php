<?php

namespace App\Tests\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\DomCrawler\Crawler;

class RegistrationControllerTest extends WebTestCase
{
    public function testVisitingWhileLoggedIn()
    {
        $client = static::createClient();

        // get or create the user somehow (e.g. creating some users only
        // for tests while loading the test fixtures)
        $userRepository = static::$container->get(UserRepository::class);
        $testUser = $userRepository->findOneByEmail('niki.chered@gmail.com');

        $client->loginUser($testUser);}


    public function testFormSubmission(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/register');
        $this->assertResponseIsSuccessful();
        $crawler = $client->submitForm('Inscription', ['username' => 'Nikolay']);
        $crawler = $client->submitForm('Inscription', ['email' => 'jane.doe@example.com']);
        $crawler = $client->submitForm('Inscription', ['plainPassword' => '2872526']);
        $crawler = $client->submitForm('Inscription', ['nom' => 'Fabien']);
        $crawler = $client->submitForm('Inscription', ['prenom' => 'Jane']);
        $crawler = $client->submitForm('Inscription', ['roles' => 'ROLE_USER']);
        $this->assertTrue($client->getResponse()->isSuccessful());

        //$this->assertSelectorTextContains('h1', 'Hello World');
    }
}
