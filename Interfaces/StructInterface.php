<?php

namespace Nlib\Struct\Interfaces;

interface StructInterface {

    public function factory() : StructInterface;

    public function create() : StructInterface;

    public function convert(array $array) : StructInterface;

}