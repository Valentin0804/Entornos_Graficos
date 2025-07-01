<?php
if (!file_exists('prueba.db')) {
    $db = new SQLite3('prueba.db');
    $query = "CREATE TABLE IF NOT EXISTS buscador (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        canciones TEXT NOT NULL
    )";
    $db->exec($query);
    $insertQuery = "INSERT INTO buscador (canciones) VALUES
        ('Jijiji'),
        ('Martinis y Tafiroles'),
        ('Vuelo a Sidney'),
        ('Habia una vez...'),
        ('Amok! Amok!')";
    $db->exec($insertQuery);
}
?>