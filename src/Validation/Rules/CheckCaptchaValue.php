<?php

declare(strict_types=1);

namespace App\Validation\Rules;

use Respect\Validation\Rules\AbstractRule;

class CheckCaptchaValue extends AbstractRule
{
  private string $captchaId;

  public function __construct(string $captchaId)
  {
    $this->captchaId = $captchaId;
  }

  public function validate($input): bool
  {
    // TODO: needs to implement
    return $input === '99887' && $this->captchaId === '87c80bbf-3027-4146-ab6d-c476c942cd60';
  }
}
