<?php

namespace Alura\Bank\Models;

trait PropAccess
{
    public function __get(string $name)
    {
        $method = 'get' . ucfirst($name);
        return $this->$method();
    }
}