<?php

namespace MiNamespace\db;

use PDO;
 
interface IPDOConnection {
    public static function connect(): PDO;
}