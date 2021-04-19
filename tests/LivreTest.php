<?php

namespace App\Tests;

use App\Entity\Livre;
use PHPUnit\Framework\TestCase;

class LivreTest extends TestCase
{
    public function testCreateLivre(): void
    {
        $livre = new Livre();
        $livre->setTitreLivre("Réseaux informatiques");
        $this->assertEquals("Livre 1", $livre->getTitreLivre());
        $livre->setAuteur("José DORDOIGNE");
        $this->assertEquals("José DORDOIGNE", $livre->getAuteur());
        $livre->setResume("Ce livre s'adresse aux réseaux informatiques et les systèmes d'exploitation");
        $this->assertEquals("Ce livre s'adresse aux réseaux informatiques et les systèmes d'exploitation", $livre->getResume());
        $livre->setRefEni("RI8RES");
        $this->assertEquals("RI8RES", $livre->getRefEni());
        $date = new \DateTime(date("Y-m-d H:i:s", strtotime('2021-04-18 09:20:35'))) ;
        $livre->setCreatedAt($date);
        $this->assertEquals($date, $livre->getCreatedAt());
        $this->assertTrue(true);
    }
}
