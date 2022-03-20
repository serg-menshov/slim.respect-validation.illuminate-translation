<?php

declare(strict_types=1);

namespace App\Validation\Rules;

use Respect\Validation\Rules\AbstractRule;

class Confirmed extends AbstractRule
{
  private $compareTo;

  public function __construct($compareTo)
  {
    $this->compareTo = $compareTo;
  }

  public function validate($input): bool
  {
    return $input == $this->compareTo;
  }
}
