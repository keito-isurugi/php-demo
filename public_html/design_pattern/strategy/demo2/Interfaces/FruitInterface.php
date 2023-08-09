<?php
namespace Interfaces;
interface FruitInterface{
    public function getName(): string;
    public function getColor(): string;
    public function getHasLike(): string;
    public function getOrderOfPopularity(): int;
    public function getCalorie(): int;
}
