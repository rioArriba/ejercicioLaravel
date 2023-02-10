<?php
namespace MiNamespace\Service\impl;

use MiNamespace\factories\ActorFactory;
use MiNamespace\Service\ActorService;

class ActorServiceImpl implements ActorService {

    public static function read() {
        return ActorFactory::getDAO()::read();
    }
    public static function find($id) {
        return ActorFactory::getDAO()::findById($id);
    }
}