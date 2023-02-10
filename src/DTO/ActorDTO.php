<?php

namespace MiNamespace\DTO;
use JsonSerializable;

class ActorDTO implements JsonSerializable{

function __construct(private ?int $id, private string $nombre) 
{
    $this->id = $id;
    $this->nombre = $nombre;
}

public function id(): int {
    return $this->id;
}

public function nombre(): string {
    return $this->nombre;
}

function jsonSerialize(): mixed {
    return [
        'id' => $this->id,
        'nombre' => $this->nombre,
    ];		
}
}