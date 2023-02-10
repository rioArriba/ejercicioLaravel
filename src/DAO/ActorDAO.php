<?php
namespace MiNamespace\DAO;

use MiNamespace\DTO\ActorDTO;

interface ActorDAO {


public static function read(): array;
public static function findById(int $id): ActorDTO;
}