<?php
namespace PublicHtml\tyozetu_sw\part5\fizzbuzz;

class NumberConvarter
{
  /**
   * @param ReplaceRuleInterface[] $rules
   */
  public function __construct(
    protected array $rules
  ){}

  public function convert(int $n): string
  {
    $carry = $n;
    foreach($this->rules as $rule) {
      if($rule->match($carry, $n)) {
        $carry = $rule->apply($carry, $n);
      }
    }
    return $carry;
  }
}