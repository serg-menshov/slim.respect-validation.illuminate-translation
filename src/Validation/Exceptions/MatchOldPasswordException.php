<?php

namespace App\Validation\Exceptions;

use Respect\Validation\Exceptions\ValidationException;

final class MatchOldPasswordException extends ValidationException
{
  protected $defaultTemplates = [
    self::MODE_DEFAULT => [
      self::STANDARD => 'Incorrect current password',
    ]
  ];
}
