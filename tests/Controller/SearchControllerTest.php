<?php

namespace App\Tests\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\DomCrawler\Form;
use Symfony\Component\DomCrawler\Crawler;

class SearchControllerTest extends WebTestCase
{
    public function testSearchIndex(): void
    {
        $client = static::createClient();

        // get or create the user somehow (e.g. creating some users only
        // for tests while loading the test fixtures)
        $userRepository = static::$container->get(UserRepository::class);
        $testUser = $userRepository->findOneByEmail('niki.chered@gmail.com');

        $client->loginUser($testUser);
        $client->request('GET', '/search');
        $this->assertResponseIsSuccessful();

    }

    public function testSearchLivre(): void{
        $client = static::createClient();

        // get or create the user somehow (e.g. creating some users only
        // for tests while loading the test fixtures)
        $userRepository = static::$container->get(UserRepository::class);
        $testUser = $userRepository->findOneByEmail('niki.chered@gmail.com');

        $client->loginUser($testUser);
        $crawler = $client->request('GET', '/search_livres');
        $buttonCrawlerNode = $crawler->selectButton('submit');

        $form = $buttonCrawlerNode->form();
        $client->submit($form, [
            'my_form[titre_livre]'    => 'Livre',
            'my_form[auteur]' => 'Jean Luc Picard!'
        ]);
        $this->assertTrue($client->getResponse()->isSuccessful());

    }
}
