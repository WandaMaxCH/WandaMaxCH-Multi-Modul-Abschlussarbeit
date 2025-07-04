<?php
//Logik von submitReservation.php

class ReservationHandler
{
    public static function generateKey($length = 8) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $key = '';
        for ($i = 0; $i < $length; $i++) {
            $key .= $characters[random_int(0, strlen($characters) - 1)];
        }
        return $key;
    }

    public static function isValidPostData(array $data): bool
    {
        return isset(
            $data['Datum'],
            $data['Von'],
            $data['Bis'],
            $data['Zimmer'],
            $data['Bemerkung'],
            $data['Teilnehmer']
        );
    }

    //Speichert Daten in die DB
    public static function saveToDatabase(PDO $conn, array $data, string $privateKey, string $publicKey): bool
    {
        $query = $conn->prepare("INSERT INTO reservationen (Datum, Von, Bis, Zimmer, Bemerkung, Teilnehmer, Private_Key, Public_Key)
                                 VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

        return $query->execute([
            $data['Datum'],
            $data['Von'],
            $data['Bis'],
            $data['Zimmer'],
            $data['Bemerkung'],
            $data['Teilnehmer'],
            $privateKey,
            $publicKey
        ]);
    }

}