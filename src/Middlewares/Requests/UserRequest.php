<?php

declare(strict_types=1);

namespace App\Middlewares\Requests;

use Respect\Validation\Validator as v;

class UserRequest extends BaseRequest
{
  private bool $isProfile;

  public function __construct(bool $isProfile = true)
  {
    $this->isProfile = $isProfile;
  }

  protected function rules(array $params): v
  {
    $validator = v::key('name', v::stringType()->regex('/^[a-zA-Z0-9-_.]{2,30}$/')->checkUserAttrForUnique())
      ->key('email', v::email()->checkUserAttrForUnique())
      ->key('first_name', v::stringType()->length(null, 30), false)
      ->key('middle_name', v::stringType()->length(null, 30), false)
      ->key('last_name', v::stringType()->length(null, 30), false)
      ->key('sex', v::intType()->in([1, 2]), false)
      ->key('birthday', v::date('Y-m-d'), false)
      ->key('note', v::stringType()->length(null, 3000), false)
      ->key('def_measure_id', v::intType()->in([1, 2]));

    if ($this->isProfile) {
      $validator = $validator->key('oldPassword', v::stringType()->length(1, null)->matchOldPassword());
    } else {
      $validator = $validator->key('password', v::stringType()->length(1, null))
        ->key('password_confirmation', v::stringType()->confirmed((string)$params['password']))
        ->key('captcha_id', v::uuid())
        ->key('captcha_value', v::regex('/^[0-9]{5}$/')->checkCaptchaValue((string)$params['captcha_id']));
    }

    return $validator;
  }
}
