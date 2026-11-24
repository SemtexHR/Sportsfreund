DROP DATABASE IF EXISTS sportsfreund;
CREATE DATABASE IF NOT EXISTS sportsfreund
DEFAULT CHARACTER SET utf8
COLLATE utf8_general_ci;

USE sportsfreund;

CREATE TABLE IF NOT EXISTS user(
    pk_userID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    passwort_hash CHAR(64) NOT NULL,
    erstellt_am TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS sportplatz(
    pk_sportplatzID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    adresse VARCHAR(100) NOT NULL,
    beschriebung TEXT,
    laengengrad DECIMAL(7,4) NOT NULL,
    breitengrad DECIMAL(7,4) NOT NULL,
    erstellt_am TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fk_erstellt_von INT UNSIGNED NOT NULL,
    FOREIGN KEY(fk_erstellt_von) REFERENCES user(pk_userID)
);

CREATE TABLE IF NOT EXISTS anwesenheit(
    pk_anwesenheitID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    von_zeitpunkt DATETIME NOT NULL,
    bis_zeitpunkt DATETIME NOT NULL,
    erstellt_am TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fk_userID INT UNSIGNED NOT NULL,
    fk_sportplatzID INT UNSIGNED NOT NULL,
    FOREIGN KEY(fk_userID) REFERENCES user(pk_userID) ON DELETE CASCADE,
    FOREIGN KEY(fk_sportplatzID) REFERENCES sportplatz(pk_sportplatzID) ON DELETE CASCADE
);

 CREATE TABLE IF NOT EXISTS usertoken(
     pk_tokenID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
     token_hash char(64) NOT NULL,
     expires_at DATETIME NOT NULL,
     fk_userID INT UNSIGNED NOT NULL,
     FOREIGN KEY(fk_userID) REFERENCES user(pk_userID) ON DELETE CASCADE
 );

