<?php

namespace App\Validation\Exceptions;

use Respect\Validation\Exceptions\ValidationException;

final class CheckCaptchaValueException extends ValidationException
{
  protected $defaultTemplates = [
    self::MODE_DEFAULT => [
      self::STANDARD => 'Incorrect code from the picture',
    ]
  ];
}
