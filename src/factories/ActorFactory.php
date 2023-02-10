<?php
namespace MiNamespace\factories;
 
use MiNamespace\DAO\impl\ActorDAOImpl;
use MiNamespace\Service\impl\ActorServiceImpl;

 class ActorFactory {

    public static function getService() {
        return new ActorServiceImpl();
    }

    public static function getDAO() {
        return new ActorDAOImpl();
    }
 }