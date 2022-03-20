<?php

namespace App\Validation\Exceptions;

use Respect\Validation\Exceptions\ValidationException;

final class CheckUserAttrForUniqueException extends ValidationException
{
  protected $defaultTemplates = [
    self::MODE_DEFAULT => [
      self::STANDARD => '{{name}} already used by another user',
    ]
  ];
}
