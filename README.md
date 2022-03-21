# Slim 4 + Respect/Validation + Illuminate/Translation example
Пример реализации перевода сообщений Respect/Validation на русский язык с использованием Illuminate/Translation.
*An example of Respect/Validation messages translation into Russian using Illuminate/Translation.*

Перевод содержится в файле *The translation is contained in the file*:
**./resources/lang/ru/respect-validation.php**

## composer - install dependencies
    composer install
    composer dump-autoload

## run example
    php -S localhost:8000 -t public

## api-request example 1
POST http://localhost:8000/user/register

**Wrong JSON Body:**
    {
      "name": "test",
      "email": "test@test.com",
      "first_name": "Input",
      "middle_name": "Your",
      "last_name": "Name",
      "sex": 1,
      "birthday": "1980-11-33",
      "note": "Developer",
      "def_measure_id": 3,
      "password": "123",
      "password_confirmation": "12",
      "captcha_id": "87c80bbf-3027-4146-ab6d-c476c942cd60",
      "captcha_value": "99881"
    }

**Expected result with status code 422:**
    {
      "message": {
        "name": "name уже используется другим пользователем",
        "email": "email уже используется другим пользователем",
        "birthday": "birthday должно быть допустимой датой в формате \"2005-12-30\"",
        "def_measure_id": "def_measure_id должно быть из списка `{ 1, 2 }`",
        "password_confirmation": "Требуется подтверждение",
        "captcha_value": "Вы не верно ввели код с картинки"
      }
    }

**Correct JSON body:**
    {
      "name": "test1",
      "email": "test1@test.com",
      "first_name": "Input",
      "middle_name": "Your",
      "last_name": "Name",
      "sex": 1,
      "birthday": "1980-11-11",
      "note": "Developer",
      "def_measure_id": 1,
      "password": "123",
      "password_confirmation": "123",
      "captcha_id": "87c80bbf-3027-4146-ab6d-c476c942cd60",
      "captcha_value": "99887"
    }

**Expected result with status code 200:**
    {
      "name": "test1",
      "email": "test1@test.com",
      "first_name": "Input",
      "middle_name": "Your",
      "last_name": "Name",
      "sex": 1,
      "birthday": "1980-11-11",
      "note": "Developer",
      "def_measure_id": 1,
      "password": "123",
      "captcha_id": "87c80bbf-3027-4146-ab6d-c476c942cd60",
      "password_hash": "$2y$10$xNtjRixRnvHG./Qes17Zm.M7Hv4PMTHdSANl9/t0z.GCz5rWXyAOe"
    }

## api-request example 2
PUT http://localhost:8000/user/profile

**Wrong JSON Body:**
    {
      "name": "test",
      "email": "test@test.com",
      "first_name": "Input",
      "middle_name": "Your",
      "last_name": "Name",
      "oldPassword": "54321"
    }

**Expected result with status code 422:**
    {
      "message": {
        "name": "name уже используется другим пользователем",
        "email": "email уже используется другим пользователем",
        "def_measure_id": "def_measure_id должно присутствовать",
        "oldPassword": "Текущий пароль введен не верно"
      }
    }

**Correct JSON body:**
    {
      "name": "test1",
      "email": "test1@test.com",
      "first_name": "Input",
      "middle_name": "Your",
      "last_name": "Name",
      "def_measure_id": 1,
      "oldPassword": "12345"
    }

**Expected result with status code 200:**
    {
      "name": "test1",
      "email": "test1@test.com",
      "first_name": "Input",
      "middle_name": "Your",
      "last_name": "Name",
      "def_measure_id": 1
    }

## api-request example 3
GET http://localhost:8000/split-time-calc

**Wrong JSON Body:**
    {
      "measure": 4,
      "timeHours": 25,
      "timeMinutes": 56,
      "timeSeconds": 0,
      "divisionType": 1,
      "divisionValue": 8,
      "paceType": 1,
      "speedType": 3,
      "speedMinutes": 6,
      "speedSeconds": 30,
      "timeFactArray": [
        {
          "timeHours": 0,
          "timeMinutes": -4,
          "timeSeconds": 10
        },
        {
          "timeHours": 0,
          "timeMinutes": 4,
          "timeSeconds": 15
        }
      ],
      "save": false
    }

**Expected result with status code 422:**
    {
      "message": {
        "id": "id должно присутствовать",
        "title": "title должно присутствовать",
        "distanceLength": "distanceLength должно присутствовать",
        "measure": "measure должно быть из списка `{ 1, 2 }`",
        "timeHours": "timeHours должно быть между 0 и 24",
        "timeFactArray": "timeMinutes должно быть между 0 и 59",
        "speedType": "speedType должно быть из списка `{ 1, 2 }`"
      }
    }
