<?php

namespace App\Service;

final class ImmutableService
{
    public function __construct(
        private readonly int    $immutableInteger,
        private readonly string $immutableString,
        private readonly array  $array
    ) {
    }

    public function getImmutableInteger(): int
    {
        return $this->immutableInteger;
    }

    public function getImmutableString(): string
    {
        return $this->immutableString;
    }

    public function getArray(): array
    {
        return $this->array;
    }

    public function setSelf(int $int, string $sting): self
    {
        return new self($int, $sting, []);
    }
}
