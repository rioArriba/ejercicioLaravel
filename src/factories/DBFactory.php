<?php

namespace MiNamespace\factories;

use MiNamespace\db\impl\MysqlPDO;

class DBFactory {

    public static function getConnection() {
        return new MysqlPDO();       
    }
}
