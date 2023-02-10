<?php

namespace MiNamespace\db\impl;

use PDO;
use PDOException;
use MiNamespace\db\IPDOConnection;

class MysqlPDO implements IPDOConnection {

        public static function connect(): PDO{
            try {         
                
                $db = $_ENV['DB_DATABASE'];
                $user = $_ENV['DB_USERNAME'];
                $password = $_ENV['DB_PASSWORD']; 
                $sql = $_ENV['DB_CONNECTION'];
                $url = $_ENV['DB_HOST'];

                $pdo = new PDO("$sql:host=$url;dbname=$db", $user, $password);    
                //$pdo = new PDO("mysql:host=localhost;dbname=movies", 'root', 'root');
                $pdo->exec("set names utf8");
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                throw new PDOException("Error al conectar con la bbdd",500);
            }
            return $pdo;
        }
}
