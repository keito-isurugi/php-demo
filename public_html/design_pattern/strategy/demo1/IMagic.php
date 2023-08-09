<?php
interface IMagic {
  public function name(): string;
  public function costMagicPoint(): int;
  public function attackPower(): int;
  public function costTechnicalPoint(): int;
}