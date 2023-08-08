<?php
class Sphere extends Circle
{
	public function getSurfaceArea(): float
	{
		return 4 * self::PI * $this->radius * $this->radius;
	}
}