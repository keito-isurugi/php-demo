<?php
class TaskDisplay
{
  public $total;
  public $remains;

  public function __construct(int $total, int $remains)
  {
    $this->total = $total;
    $this->remains = $remains;
  }

  public function show(): string
  {
    return "{$this->total} 件中 {$this->remains} 件が完了しました";
  }
}

class PercentileTaskDisplay extends TaskDisplay
{
  public function show(): string
  {
    $percent = (int)(100.0 * $this->remains / $this->total);
    return parent::show() . "($percent %)";
  }
}


$percentileTaskDisplay = new PercentileTaskDisplay(0, 0);
echo $percentileTaskDisplay->show();