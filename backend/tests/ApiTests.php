<?php

namespace Tests;

require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class ApiTests extends TestCase {

    // Anwesenheits Tests
    public function test_anwesenheiten_abfragen(): void {
        $service = "";
        $result = $service;

        $this->assertIsArray($result);

        $this->assertArrayHasKey('id', $result);
        $this->assertIsInt($result['id']);

        $this->assertArrayHasKey('zeit', $result);
        $this->assertIsString('', $result['zeit']);

        $this->assertArrayHasKey('personen', $result);
        $this->assertIsInt('', $result['personen']);
    }

    public function test_anwesenheiten_austragen(): void {
        $service = "";
        $result = $service;

        $this->assertIsArray($result);

        $this->assertArrayHasKey('message');
        $this->assertEquals('Anwesenheit erfolgreich ausgetragen', $result['message']);
    }

    public function test_anwesenheiten_eintragen(): void {
        $service = "";
        $result = $service;

        $this->assertIsArray($result);

        $this->assertArrayHasKey('message');
        $this->assertEquals('Anwesenheit erfolgreich eingetragen', $result['message']);
    }

    // Sportplaetze Tests
    public function test_sportplaetze_abfragen_full(): void{
        $service = "";
        $result = $service;

        $this->assertIsArray($result);

        foreach($result as $sportplatz){
            // Felder Prüfen
            $this->assertArrayHasKey('id', $sportplatz);
            $this->assertArrayHasKey('name', $sportplatz);
            $this->assertArrayHasKey('breitengrad', $sportplatz);
            $this->assertArrayHasKey('laengengrad', $sportplatz);
            $this->assertArrayHasKey('beschreibung', $sportplatz);

            // Datentypen prüfen
            $this->assertIsInt($sportplatz['id']);
            $this->assertIsString($sportplatz['name']);
            $this->assertIsFloat($sportplatz['breitengrad']);
            $this->assertIsFloat($sportplatz['laengengrad']);
            $this->assertIsString($sportplatz['beschreibung']);
        }
    }

    public function test_sportplaetze_abfragen_empty(): void{
        $service = "";
        $result = $service;

        $this->assertIsArray($result);
        $this->assertEmpty($result);
    }

    public function test_sportplaetze_registrieren(): void{
        $service = "";
        $result = $service;

        $this->assertIsArray($result);

        $this->assertArrayHasKey('message', $result);
        $this->assertEquals('Sportplatz erstellt', $result['message']);
    }

    public function test_sportplaetze_suche_full_with_distance(): void{
        $service = "";
        $result = $service;

        $this->assertIsArray($result);

        foreach($result as $sportplatz){
            // Felder Prüfen
            $this->assertArrayHasKey('id', $sportplatz);
            $this->assertArrayHasKey('name', $sportplatz);
            $this->assertArrayHasKey('breitengrad', $sportplatz);
            $this->assertArrayHasKey('laengengrad', $sportplatz);
            $this->assertArrayHasKey('beschreibung', $sportplatz);
            $this->assertArrayHasKey('personen', $sportplatz);
            $this->assertArrayHasKey('entfernung', $sportplatz);

            // Datentypen prüfen
            $this->assertIsInt($sportplatz['id']);
            $this->assertIsString($sportplatz['name']);
            $this->assertIsFloat($sportplatz['breitengrad']);
            $this->assertIsFloat($sportplatz['laengengrad']);
            $this->assertIsString($sportplatz['beschreibung']);
            $this->assertIsInt($sportplatz['personen']);
            $this->assertIsFloat($sportplatz['entfernung']);   
        }
    }

    public function test_sportplaetze_suche_full_without_distance(): void{
        $service = "";
        $result = $service;

        $this->assertIsArray($result);

        foreach($result as $sportplatz){
            // Felder Prüfen
            $this->assertArrayHasKey('id', $sportplatz);
            $this->assertArrayHasKey('name', $sportplatz);
            $this->assertArrayHasKey('breitengrad', $sportplatz);
            $this->assertArrayHasKey('laengengrad', $sportplatz);
            $this->assertArrayHasKey('beschreibung', $sportplatz);
            $this->assertArrayHasKey('personen', $sportplatz);

            // Datentypen prüfen
            $this->assertIsInt($sportplatz['id']);
            $this->assertIsString($sportplatz['name']);
            $this->assertIsFloat($sportplatz['breitengrad']);
            $this->assertIsFloat($sportplatz['laengengrad']);
            $this->assertIsString($sportplatz['beschreibung']);
            $this->assertIsInt($sportplatz['personen']);
        }
    }

    public function test_sportplaetze_suche_empty(): void{
        $service = "";
        $result = $service;

        $this->assertIsArray($result);
        $this->assertEmpty($result);
    }

    // User Tests

    public function test_user_login_valid(): void{
        $service = "";
        $result = $service;

        $this->assertIsArray($result);

        $this->assertArrayHasKey('message', $result);
        $this->assertEquals('Anmeldung erfolgreich', $result['message']);

        $this->assertArrayHasKey('data', $result);
        $data = $result['data'];

        $this->assertArrayHasKey('token', $result);
        $this->assertIsString($result['token']);
    }

    public function test_user_login_invalid(): void{
        $service = "";
        $result = $service;

        $this->assertIsArray($result);

        $this->assertArrayHasKey('error', $result);
        $this->assertEquals('Username oder Passwort falsch', $result['error']);
    }

    public function test_user_logout(): void{
        $service = "";
        $result = $service;

        $this->assertIsArray($result);

        $this->assertArrayHasKey('message', $result);
        $this->assertEquals('Abmeldung erfolgreich', $result['message']);
    }

    public function test_user_password_aendern(): void{
        $service = "";
        $result = $service;

        $this->assertIsArray($result);

        $this->assertArrayHasKey('message', $result);
        $this->assertEquals('Passwort geändert', $result['message']);
    }

    public function test_user_erstellen(): void{
        $service = "";
        $result = $service;

        $this->assertIsArray($result);

        $this->assertArrayHasKey('message', $result);
        $this->assertEquals('Nutzer erstellt', $result['message']);
    }

    public function test_user_loeschen(): void{
        $service = "";
        $result = $service;

        $this->assertIsArray($result);

        $this->assertArrayHasKey('message', $result);
        $this->assertEquals('Nutzer gelöscht', $result['message']);
    }
}