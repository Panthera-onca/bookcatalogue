<?php

namespace App\Tests\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdminControllerTest extends WebTestCase
{
    public function testVisitingWhileLoggedIn()
    {
        $client = static::createClient();

        // get or create the user somehow (e.g. creating some users only
        // for tests while loading the test fixtures)
        $userRepository = static::$container->get(UserRepository::class);
        $testUser = $userRepository->findOneByEmail('niki.chered@gmail.com');

        $client->loginUser($testUser);

        // user is now logged in, so you can test protected resources
        $client->request('GET', '/dashboard/user');
        $this->assertResponseIsSuccessful();
    }
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
