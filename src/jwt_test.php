<?php
// 1. Prüfen, ob der Autoloader im Container existiert
if (!file_exists('vendor/autoload.php')) {
    die("Fehler: 'vendor/autoload.php' wurde im Container nicht gefunden!");
}

require 'vendor/autoload.php';

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

echo "<h3>JWT-Test im Docker-Container</h3>";
echo "✅ Der Composer Autoloader wurde erfolgreich geladen.<br>";

// 2. Testen, ob die JWT-Klasse geladen werden kann und funktioniert
$geheimnis = "Ich_bin_ein_Key_der_sehr_lang_ist_32_Zeichen_mindestens";
$payload = [
    "iss" => "localhost",
    "aud" => "localhost",
    "iat" => time(),
    "exp" => time() + 3600,
    "user_id" => 42
];

try {
    // Token generieren
    $jwt = JWT::encode($payload, $geheimnis, 'HS256');
    echo "✅ JWT erfolgreich generiert: <code style='background:#eee;padding:2px 5px;'>$jwt</code><br>";

    // Token direkt wieder entschlüsseln zur Verifizierung
    $decoded = JWT::decode($jwt, new Key($geheimnis, 'HS256'));
    echo "✅ JWT erfolgreich verifiziert! User-ID im Token ist: <strong>" . $decoded->user_id . "</strong><br>";
    
    echo "<br><span style='color:green;font-weight:bold;'>Alles perfekt! Deine JWT-Bibliothek ist fest im Container installiert und einsatzbereit.</span>";

} catch (Exception $e) {
    echo "<span style='color:red;'>❌ Fehler beim JWT-Test: " . $e->getMessage() . "</span>";
}
