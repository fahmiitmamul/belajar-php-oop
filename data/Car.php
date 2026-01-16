<?php

namespace Data;

interface HasBrand
{
  function getBrand(): string;
}

interface IsMaintenance
{
  function isMaintenance(): bool;
}

interface Car extends HasBrand, IsMaintenance
{
  function drive(): void;

  function getTire(): int;
}

class Avanza implements Car
{
  public function drive(): void
  {
    echo "Avanza is driving" . PHP_EOL;
  }

  public function getTire(): int
  {
    return 4;
  }
}