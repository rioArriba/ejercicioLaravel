<?php
namespace MiNamespace\Service;

use MiNamespace\DTO\ActorDTO;

interface ActorService {

    public static function read();
    public static function find($id);
    public static function update(ActorDTO $actor): bool;
}