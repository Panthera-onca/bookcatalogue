<?php

namespace App\Tests\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityControllerTest extends WebTestCase
{
    public function testSomething(): void
    {
        $client = static::createClient();
        $userRepository = static::$container->get(UserRepository::class);
        $testUser = $userRepository->findOneByEmail('mykola.cherednychenko@mail.ru');
        $client->loginUser($testUser);
        $client->request('GET', '/login');


        $this->assertResponseIsSuccessful();
    }
}
