<?php

namespace Tests;

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

    public function test_user_login_valid(): void{}

    public function test_user_login_invalid(): void{}

    public function test_user_logout(): void{}

    public function test_user_password_aendern(): void{}

    public function test_user_erstellen(): void{}

    public function test_user_loeschen(): void{}
}