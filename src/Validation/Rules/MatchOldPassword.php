<?php

declare(strict_types=1);

namespace App\Validation\Rules;

use Respect\Validation\Rules\AbstractRule;

class MatchOldPassword extends AbstractRule
{
  public function validate($input): bool
  {
    // TODO: needs to implement
    return $input === '12345';
  }
}
