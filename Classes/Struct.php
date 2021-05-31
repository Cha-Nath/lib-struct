<?php

namespace Nlib\Struct\Classes;

class Struct {

    public function factory() {

        $Struct = new $this;

        foreach (func_get_args() as $value) $Struct->$value = null;

        return $Struct;
    }

    public function create() {
        
        $Struct = clone $this;
 
        $properties = array_keys((array) $Struct);

        foreach (func_get_args() as $key => $value) $Struct->{$properties[$key]} = $value;
 
        return $Struct;
    }
}