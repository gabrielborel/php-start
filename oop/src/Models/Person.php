<?php

namespace Alura\Bank\Models;

class Person
{
    use PropAccess;

    public function __construct(
        protected string     $name,
        private readonly CPF $cpf,
    )
    {
        $this->validateName($this->name);
    }

    final protected function validateName(string $ownerName): void
    {
        if (strlen($ownerName) < 5) {
            echo "Invalid ownerName length";
            exit();
        }
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCpf(): string
    {
        return $this->cpf->getCpf();
    }
}