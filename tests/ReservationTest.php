<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\Reservation;

class ReservationTest extends TestCase
{
    public function testCreateReservation(): void
    {
        $reservation = new Reservation();
        $date = new \DateTime(date("Y-m-d H:i:s", strtotime('2021-04-18 09:20:35')));
        $reservation->setCreatedAt($date);
        $this->assertEquals($date, $reservation->getCreatedAt());
    }
}
