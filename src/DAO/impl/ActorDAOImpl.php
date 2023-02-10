<?php

namespace MiNamespace\DAO\impl;

use App\Models\Actor;
use MiNamespace\db\orm\DB;
use MiNamespace\DAO\ActorDAO;
use MiNamespace\DTO\ActorDTO;

class ActorDAOImpl implements ActorDAO{    
    
    public static function read(): array {

        $db_data = Actor::all();

       /* $result = array();        
        $db_data = DB::table('actors')->select('*')->get(); */
        foreach ($db_data as $actor) {
            $result[] = new ActorDTO(
            $actor->id, 
            $actor->nombre 
        );            
        } 
        return $result;  
    }

    public static function findById(int $id): ActorDTO {
        $db_data = DB::table('actors')->find($id);
        $result = new ActorDTO(
                $db_data->id, 
                $db_data->nombre     
            );         
            return $result;   
    }
}