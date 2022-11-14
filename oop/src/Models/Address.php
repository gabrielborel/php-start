<?php

namespace Alura\Bank\Models;

/**
 * @property-read string $area
 * @property-read string $city
 * @property-read string $number
 * @property-read string $street
 */
final class Address
{
    use PropAccess;

    public function __construct(
        private string $city,
        private string $street,
        private string $area,
        private string $number,
    )
    {
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function getArea(): string
    {
        return $this->area;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function __toString(): string
    {
        return "{$this->street}, {$this->number}, {$this->area}, {$this->city}";
    }

}
