<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../php-web/ReservationHandler.php';

class ReservationHandlerTest extends TestCase
{
    //Test generateKey Funktion: überprüft public- & private Key Länge
    public function testLength()
    {
        $key = ReservationHandler::generateKey(10);
        $this->assertEquals(8, strlen($key));
    }

    //Test generateKey Funktion: überprüft gültige Zeichen
    public function testCharacters()
    {
        $key = ReservationHandler::generateKey(8);
        $this->assertMatchesRegularExpression('/^[a-zA-Z0-9]+$/', $key);
    }

    public function testValidPostDataTrue()
    {
        $data = [
            'Datum' => '2025-07-01',
            'Von' => '10:00',
            'Bis' => '12:00',
            'Zimmer' => '101',
            'Bemerkung' => 'Test',
            'Teilnehmer' => 'Alex Ioanne'
        ];
        $this->assertTrue(ReservationHandler::isValidPostData($data));
    }

    //testet ob Form Daten vollständig, 'Bis' fehlt
    public function testValidPostDataFalse()
    {
        $data = [
            'Datum' => '2025-07-01',
            'Von' => '10:00',
            'Zimmer' => '101',
            'Bemerkung' => 'Test',
            'Teilnehmer' => 'Jason McFadden'
        ];
        $this->assertFalse(ReservationHandler::isValidPostData($data));
    }

}
