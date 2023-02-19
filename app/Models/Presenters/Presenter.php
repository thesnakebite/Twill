<?php

namespace App\Models\Presenters;

abstract class Presenter
{
    protected $entity;

    public function __construct($entity)
    {
        $this->entity = $entity;
    }

    // Llame a la función que existe, o devuelva la propiedad en el modelo original
    public function __get($property)
    {
        if(method_exists($this, $property)) {
            return $this->{$property}();
        }
        return $this->entity->{$property};
    }
}