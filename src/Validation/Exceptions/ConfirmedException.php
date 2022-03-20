<?php

namespace App\Validation\Exceptions;

use Respect\Validation\Exceptions\ValidationException;

final class ConfirmedException extends ValidationException
{
  protected $defaultTemplates = [
    self::MODE_DEFAULT => [
      self::STANDARD => 'Confirmation required',
    ]
  ];
}
