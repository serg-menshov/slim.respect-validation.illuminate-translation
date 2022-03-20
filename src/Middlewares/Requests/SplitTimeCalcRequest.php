<?php

declare(strict_types=1);

namespace App\Middlewares\Requests;

use Respect\Validation\Validator as v;

class SplitTimeCalcRequest extends BaseRequest
{
  protected function rules(array $params): v
  {
    $validator = v::key('id', v::intType()->positive())
      ->key('title', v::stringType()->length(1, 50))
      ->key('distanceLength', v::number()->min(0.01))
      ->key('measure', v::intType()->in([1, 2]))  // 1 - миль, 2 - км
      ->key('timeHours', v::intType()->between(0, 24))
      ->key('timeMinutes', v::intType()->between(0, 59))
      ->key('timeSeconds', v::intType()->between(0, 59))
      ->key('divisionType', v::intType()->in([1, 2]))  // 1 - Количество отрезков, 2 - Длина отрезка (measure)
      ->key('divisionValue', v::number()->min(0.01))
      ->key('paceType', v::intType()->in([0, 1, 2]))  // 0 - равный, 1 - позитивный, 2 - негативный
      ->key('save', v::boolType())
      ->key('timeFactArray', v::each(
        v::key('timeHours', v::intType()->between(0, 24))
          ->key('timeMinutes', v::intType()->between(0, 59))
          ->key('timeSeconds', v::intType()->between(0, 59))
      ), false);

    if (in_array((int)$params['paceType'], [1, 2])) {
      $validator = $validator->key('speedType', v::intType()->in([1, 2]))  // по макс.скорости, по мин.скорости
        ->key('speedMinutes', v::intType()->between(0, 59))  // мин/measure
        ->key('speedSeconds', v::intType()->between(0, 59));  // сек/measure
    }

    return $validator;
  }
}
