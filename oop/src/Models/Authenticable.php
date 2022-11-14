<?php

namespace Alura\Bank\Models;

interface Authenticable
{
    public function Login(string $password): bool;
}