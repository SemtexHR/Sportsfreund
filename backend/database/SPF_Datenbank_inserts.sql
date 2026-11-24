INSERT INTO user(name, passwort_hash) VALUES
    ("James T. Kirk", "SHA2('MeinPasswort123', 256)"),
    ("JeanLuc Picard", "SHA2('engageNr1!', 256)"),
    ("Spock", "SHA2('allesLogisch123', 256)"),
    ("William T. Riker", "SHA2('abc123!', 256)"),
    ("Scotty", "SHA2('beamMeUp01', 256)");

INSERT INTO sportplatz(name, adresse, beschriebung, laengengrad, breitengrad, fk_erstellt_von) VALUES
    ("Sportplatz Deitsch Wagram", "Hausfeldstraße 1, Deutsch Wagram", "gut", 42.1842, 18.4217, 1),
    ("Sportplatz Seestadt Aschpern", "Memlinggasse 3, Wien", "prinzipiell gut, aber am AdW", 47.0815, 13.8465, 2),
    ("Sportplatz Floridsdorf", "Jandagase 2, Wien", "sehr toll und die Lage perfekt", 44.4444, 21.7854, 2),
    ("Sportplatz Stephansplatz", "Stephansplatz 1, Wien", "tolle Lage, bisschen viele Leute", 34.1234, 31.1596, 3),
    ("Sportplatz Ballhausplatz", "Ballhausplatz 2, Wien", "gut, viele Sicherheitsleute", 19.7564, 24.7894, 4),
    ("Sportplatz Langenlebarn", "Feldgasse 18, Langenlebarn", "sehr Laut wegen Flugzeugen", 29.7841, 31.7851, 5);

INSERT INTO anwesenheit(von_zeitpunkt, bis_zeitpunkt, fk_userID, fk_sportplatzID) VALUES
    ('2026-11-24 08:00:00', '2026-11-24 10:00:00', 1, 1),
    ('2026-11-11 11:11:00', '2026-11-11 15:00:00', 2, 1),
    ('2026-11-24 08:00:00', '2026-11-24 10:00:00', 3, 1),
    ('2026-10-26 19:55:00', '2026-10-26 20:26:00', 1, 3),
    ('2026-10-26 19:50:00', '2026-11-24 20:20:00', 2, 3);

INSERT INTO usertoken(token_hash, expires_at, fk_userID) VALUES
    (SHA2('token_pwd_captain', 256), '2026-12-24 08:00:00', 1),
    (SHA2('token_pwd_DCaptain', 256), '2026-11-30 15:00:00', 2),
    (SHA2('token_pwd_logisch', 256), '2026-10-15 10:00:00', 3),
    (SHA2('token_pwd_nr1', 256), '2027-04-29 08:42:00', 4),
    (SHA2('token_pwd_eng', 256), '2027-01-01 01:01:00', 5);