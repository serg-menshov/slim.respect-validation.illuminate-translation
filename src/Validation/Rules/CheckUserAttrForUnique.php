<?php

declare(strict_types=1);

namespace App\Validation\Rules;

use Respect\Validation\Rules\AbstractRule;

class CheckUserAttrForUnique extends AbstractRule
{
  public function validate($input): bool
  {
    $attribute = $this->getName();
    // TODO: needs to implement
    return ($attribute === 'name' && $input !== 'test') || ($attribute === 'email' && $input !== 'test@test.com');
  }
}
