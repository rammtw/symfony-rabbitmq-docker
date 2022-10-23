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

    public function setNewValues(int $immutableInteger, string $immutableString): self
    {
        return new self($immutableInteger, $immutableString, []);
    }

    public function getFrom(): \Iterator
    {
        yield from $this->getAnotherGen();
    }

    public function getAnotherGen(): \Iterator
    {
        yield 111;
        yield 222;
        yield 333;
    }

    public function getSimple(string $var): string
    {
        return $var;
    }
}
