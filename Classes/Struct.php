<?php

namespace Nlib\Struct\Classes;

use Nlib\Struct\Interfaces\StructInterface;

class Struct implements StructInterface {

    public function factory() : StructInterface {

        $Struct = new $this;

        foreach (func_get_args() as $value) $Struct->$value = null;

        return $Struct;
    }

    public function create() : StructInterface {
        
        $Struct = clone $this;
 
        $properties = array_keys((array) $Struct);
        
        foreach ($args = func_get_args() as $key => $value) $Struct->{$properties[$key]} = $value;

        return $Struct;
    }

    public function convert(array $array) : StructInterface {

        return $this->factory(...array_keys($array))->create(...array_values($array));
    }
}