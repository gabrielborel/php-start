<?php

namespace Alura\Bank\Services;

use Alura\Bank\Models\Authenticable;

class Authenticator
{
    public function Login(Authenticable $authenticable, string $password): void
    {
        if ($authenticable->Login($password)) {
            echo "Logged In";
        } else {
            echo "Incorrect Password";
        }
    }
}