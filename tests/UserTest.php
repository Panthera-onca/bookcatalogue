<?php

namespace App\Tests;

use App\Entity\Livre;
use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testCreateUser(): void
    {
        $user = new User();
        $user->setNom("Nikolay");
        $this->assertEquals("Nikolay", $user->getNom());
    }

    public function testLivre(): void
    {
        $livre = new Livre();
        $livre->setTitreLivre("Livre 1");
        $this->assertEquals("Livre 1", $livre->getTitreLivre());
        $date = new \DateTime(date("Y-m-d H:i:s", strtotime('2021-04-18 09:20:35'))) ;

        $livre->setCreatedAt($date);
        $this->assertEquals($date, $livre->getCreatedAt());

    }

}
