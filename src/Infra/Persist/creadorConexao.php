<?php

namespace Alura\Pdo\Infra\Persist;

use PDO;

class ConnectionCreator
{
    public static function CreateConnection(): PDO
    {
        $databasePath = __DIR__ . '/../../../banco.sqlite';
        return $pdo = new PDO('sqlite' . $databasePath);

    }
}