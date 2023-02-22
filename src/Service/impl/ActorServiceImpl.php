<?php
namespace MiNamespace\Service\impl;

use MiNamespace\DTO\ActorDTO;
use MiNamespace\Service\ActorService;
use MiNamespace\factories\ActorFactory;

class ActorServiceImpl implements ActorService {

    public static function read() {
        return ActorFactory::getDAO()::read();
    }
    public static function find($id) {
        return ActorFactory::getDAO()::findById($id);
    }
    
    public static function update(ActorDTO $actor): bool {
        return ActorFactory::getDAO()::update($actor);
    }
}