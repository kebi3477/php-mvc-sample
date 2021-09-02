<?php

    class User {
        public $name;
        public function connect($name) {
            $db_host = 'localhost';
            $db_username = 'postgres';
            $db_name = 'postgres';
            $db_password = '1234';

            $dsn = "pgsql:host=$db_host;dbname=$db_name";

            $pdo = new PDO($dsn, $db_username, $db_password);

            $stmt = $pdo->prepare("INSERT INTO test (id, name) VALUES (4, ?)");
            $stmt->execute([$name]);

            $pdo=null;
        }
    }