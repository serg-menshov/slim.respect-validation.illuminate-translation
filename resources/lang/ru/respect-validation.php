<?php
// see ./vendor/respect/validation/library/Exceptions/*.php
return [
  // Custom Exceptions
  'Incorrect code from the picture' => 'Вы не верно ввели код с картинки',
  '{{name}} already used by another user' => '{{name}} уже используется другим пользователем',
  'Confirmation required' => 'Требуется подтверждение',
  'Incorrect current password' => 'Текущий пароль введен не верно',

  // AllOfException.php
  'All of the required rules must pass for {{name}}' => 'Все обязательные правила должны выполняться для {{name}}',
  'These rules must pass for {{name}}' => 'Правила должны выполняться для {{name}}',
  'None of these rules must pass for {{name}}' => 'Ни одно из правил не должно выполняться для {{name}}',
  'These rules must not pass for {{name}}' => 'Правила не должны выполняться для {{name}}',

  // AlnumException.php
  '{{name}} must contain only letters (a-z) and digits (0-9)' => '{{name}} должно содержать только буквы (a-z) и цифры (0-9)',
  '{{name}} must contain only letters (a-z), digits (0-9) and {{additionalChars}}' => '{{name}} должно содержать только буквы (a-z), цифры (0-9) и {{additionalChars}}',
  '{{name}} must not contain letters (a-z) or digits (0-9)' => '{{name}} не должно содержать буквы (a-z) или цифры (0-9)',
  '{{name}} must not contain letters (a-z), digits (0-9) or {{additionalChars}}' => '{{name}} не должно содержать буквы (a-z), цифры (0-9) или {{additionalChars}}',

  // AlphaException.php
  '{{name}} must contain only letters (a-z)' => '{{name}} должно содержать только буквы (a-z)',
  '{{name}} must contain only letters (a-z) and {{additionalChars}}' => '{{name}} должно содержать только буквы (a-z) и {{additionalChars}}',
  '{{name}} must not contain letters (a-z)' => '{{name}} не должно содержать буквы (a-z)',
  '{{name}} must not contain letters (a-z) or {{additionalChars}}' => '{{name}} не должно содержать буквы (a-z) или {{additionalChars}}',

  // AlwaysInvalidException.php
  '{{name}} is always invalid' => '{{name}} всегда недействительно',
  '{{name}} is not valid' => '{{name}} недействительно',
  '{{name}} is always valid' => '{{name}} всегда действительно',
  '{{name}} is valid' => '{{name}} действительно',

  // AlwaysValidException.php - совпадает с AlwaysInvalidException.php
  // '{{name}} is always valid' => '{{name}} всегда действительно',
  // '{{name}} is always invalid' => '{{name}} действительно',

  // AnyOfException.php
  'At least one of these rules must pass for {{name}}' => 'По крайней мере одно из этих правил должно выполняться для {{name}}',
  'At least one of these rules must not pass for {{name}}' => 'Хотя бы одно из этих правил не должно выполняться {{name}}',

  // ArrayTypeException.php
  '{{name}} must be of type array' => '{{name}} должно быть массивом (array)',
  '{{name}} must not be of type array' => '{{name}} не должно быть массивом (array)',

  // ArrayValException.php
  '{{name}} must be an array value' => '{{name}} должно быть значением массива',
  '{{name}} must not be an array value' => '{{name}} не должно быть значением массива',

  // AttributeException.php
  'Attribute {{name}} must be present' => 'Атрибут {{name}} должен присутствовать',
  'Attribute {{name}} must be valid' => 'Атрибут {{name}} должен быть действителен',
  'Attribute {{name}} must not be present' => 'Атрибут {{name}} не должен присутствовать',
  'Attribute {{name}} must not validate' => 'Атрибут {{name}} должен быть недействителен',

  // Base64Exception.php
  '{{name}} must be Base64-encoded' => '{{name}} должно быть закодировано в Base64',
  '{{name}} must not be Base64-encoded' => '{{name}} не должно быть закодировано в Base64',

  // BaseException.php
  '{{name}} must be a number in the base {{base}}' => '{{name}} должно быть числом с основанием {{base}}',
  '{{name}} must not be a number in the base {{base}}' => '{{name}} не должно быть числом с основанием {{base}}',

  // BetweenException.php
  '{{name}} must be between {{minValue}} and {{maxValue}}' => '{{name}} должно быть между {{minValue}} и {{maxValue}}',
  '{{name}} must not be between {{minValue}} and {{maxValue}}' => '{{name}} не должно быть между {{minValue}} и {{maxValue}}',

  // BoolTypeException.php
  '{{name}} must be of type boolean' => '{{name}} должно быть логического типа (boolean)',
  '{{name}} must not be of type boolean' => '{{name}} не должно быть логического типа (boolean)',

  // BoolValException.php
  '{{name}} must be a boolean value' => '{{name}} должно быть логическим (boolean) значением',
  '{{name}} must not be a boolean value' => '{{name}} не должно быть логическим (boolean) значением',

  // BsnException.php
  '{{name}} must be a BSN' => '{{name}} должно быть BSN',
  '{{name}} must not be a BSN' => '{{name}} не должно быть BSN',

  // CallException.php
  '{{input}} must be valid when executed with {{callable}}' => '{{input}} должно быть действительным при выполнении {{callable}}',
  '{{input}} must not be valid when executed with {{callable}}' => '{{input}} не должно быть действительным при выполнении {{callable}}',

  // CallableTypeException.php
  '{{name}} must be callable' => '{{name}} должно быть исполняемым (callable)',
  '{{name}} must not be callable' => '{{name}} не должно быть исполняемым (callable)',

  // CharsetException.php
  '{{name}} must be in the {{charset}} charset' => '{{name}} должно быть в кодировке {{charset}}',
  '{{name}} must not be in the {{charset}} charset' => '{{name}} не должно быть в кодировке {{charset}}',

  // CnhException.php
  '{{name}} must be a valid CNH number' => '{{name}} должно быть действительным номером CNH',
  '{{name}} must not be a valid CNH number' => '{{name}} не должно быть действительным номером CNH',

  // CnpjException.php
  '{{name}} must be a valid CNPJ number' => '{{name}} должно быть действительным номером CNPJ',
  '{{name}} must not be a valid CNPJ number' => '{{name}} не должно быть действительным номером CNPJ',

  // ConsonantException.php
  '{{name}} must contain only consonants' => '{{name}} должно содержать только согласные',
  '{{name}} must contain only consonants and {{additionalChars}}' => '{{name}} должно содержать только согласные и {{additionalChars}}',
  '{{name}} must not contain consonants' => '{{name}} не должно содержать согласные',
  '{{name}} must not contain consonants or {{additionalChars}}' => '{{name}} не должно содержать согласные или {{additionalChars}}',

  // ContainsAnyException.php
  '{{name}} must contain at least one of the values {{needles}}' => '{{name}} должно содержать хотя бы одно из значений {{needles}}',
  '{{name}} must not contain any of the values {{needles}}' => '{{name}} не должно содержать значений {{needles}}',

  // ContainsException.php
  '{{name}} must contain the value {{containsValue}}' => '{{name}} должно содержать значение {{containsValue}}',
  '{{name}} must not contain the value {{containsValue}}' => '{{name}} не должно содержать значение {{containsValue}}',

  // ControlException.php
  '{{name}} must contain only control characters' => '{{name}} должно содержать только управляющие символы',
  '{{name}} must contain only control characters and {{additionalChars}}' => '{{name}} должно содержать только управляющие символы и {{additionalChars}}',
  '{{name}} must not contain control characters' => '{{name}} не должно содержать управляющие символы',
  '{{name}} must not contain control characters or {{additionalChars}}' => '{{name}} не должно содержать управляющие символы или {{additionalChars}}',

  // CountableException.php
  '{{name}} must be countable' => '{{name}} должно быть исчисляемым (countable)',
  '{{name}} must not be countable' => '{{name}} не должно быть исчисляемым (countable)',

  // CountryCodeException.php
  '{{name}} must be a valid country' => '{{name}} должно быть действительной страной',
  '{{name}} must not be a valid country' => '{{name}} не должно быть действительной страной',

  // CpfException.php
  '{{name}} must be a valid CPF number' => '{{name}} должно быть действительным номером CPF',
  '{{name}} must not be a valid CPF number' => '{{name}} не должно быть действительным номером CPF',

  // CreditCardException.php
  '{{name}} must be a valid Credit Card number' => '{{name}} должно быть действительным номером кредитной карты',
  '{{name}} must be a valid {{brand}} Credit Card number' => '{{name}} должно быть действительным номером {{brand}} кредитной карты',
  '{{name}} must not be a valid Credit Card number' => '{{name}} не должно быть действительным номером кредитной карты',
  '{{name}} must not be a valid {{brand}} Credit Card number' => '{{name}} не должно быть действительным номером {{brand}} кредитной карты',

  // CurrencyCodeException.php
  '{{name}} must be a valid currency' => '{{name}} должно быть действительной валютой',
  '{{name}} must not be a valid currency' => '{{name}} не должно быть действительной валютой',

  // DateException.php
  '{{name}} must be a valid date in the format {{sample}}' => '{{name}} должно быть допустимой датой в формате {{sample}}',
  '{{name}} must not be a valid date in the format {{sample}}' => '{{name}} не должно быть допустимой датой в формате {{sample}}',

  // DateTimeException.php
  '{{name}} must be a valid date/time' => '{{name}} должно быть допустимым датой/временем',
  '{{name}} must be a valid date/time in the format {{sample}}' => '{{name}} должно быть допустимым датой/временем в формате {{sample}}',
  '{{name}} must not be a valid date/time' => '{{name}} не должно быть допустимым датой/временем',
  '{{name}} must not be a valid date/time in the format {{sample}}' => '{{name}} не должно быть допустимым датой/временем в формате {{sample}}',

  // DecimalException.php
  '{{name}} must have {{decimals}} decimals' => '{{name}} должно содержать {{decimals}} десятичных знаков',
  '{{name}} must not have {{decimals}} decimals' => '{{name}} не должно содержать {{decimals}} десятичных знаков',

  // DigitException.php
  '{{name}} must contain only digits (0-9)' => '{{name}} должно содержать только цифры (0-9)',
  '{{name}} must contain only digits (0-9) and {{additionalChars}}' => '{{name}} должно содержать только цифры (0-9) и {{additionalChars}}',
  '{{name}} must not contain digits (0-9)' => '{{name}} не должно содержать цифры (0-9)',
  '{{name}} must not contain digits (0-9) and {{additionalChars}}' => '{{name}} не должно содержать цифры (0-9) и {{additionalChars}}',

  // DirectoryException.php
  '{{name}} must be a directory' => '{{name}} должно быть каталогом',
  '{{name}} must not be a directory' => '{{name}} не должно быть каталогом',

  // DomainException.php
  '{{name}} must be a valid domain' => '{{name}} должно быть действительным доменом',
  '{{name}} must not be a valid domain' => '{{name}} не должно быть действительным доменом',

  // EachException.php
  'Each item in {{name}} must be valid' => 'Каждый элемент {{name}} должен быть действительным',
  'Each item in {{name}} must not validate' => 'Каждый элемент {{name}} должен быть недействительным',

  // EmailException.php
  '{{name}} must be valid email' => '{{name}} должно быть действительным адресом электронной почты',
  '{{name}} must not be an email' => '{{name}} не должно быть действительным адресом электронной почты',

  // EndsWithException.php
  '{{name}} must end with {{endValue}}' => '{{name}} должно оканчиваться {{endValue}}',
  '{{name}} must not end with {{endValue}}' => '{{name}} не должно оканчиваться {{endValue}}',

  // EqualsException.php
  '{{name}} must equal {{compareTo}}' => '{{name}} должно равняться {{compareTo}}',
  '{{name}} must not equal {{compareTo}}' => '{{name}} не должно равняться {{compareTo}}',

  // EquivalentException.php
  '{{name}} must be equivalent to {{compareTo}}' => '{{name}} должно быть эквивалентно {{compareTo}}',
  '{{name}} must not be equivalent to {{compareTo}}' => '{{name}} не должно быть эквивалентно {{compareTo}}',

  // EvenException.php
  '{{name}} must be an even number' => '{{name}} должно быть четным числом',
  '{{name}} must not be an even number' => '{{name}} не должно быть четным числом',

  // ExecutableException.php
  '{{name}} must be an executable file' => '{{name}} должно быть исполняемым файлом',
  '{{name}} must not be an executable file' => '{{name}} не должно быть исполняемым файлом',

  // ExistsException.php
  '{{name}} must exists' => '{{name}} должно существовать',
  '{{name}} must not exists' => '{{name}} не должно существовать',

  // ExtensionException.php
  '{{name}} must have {{extension}} extension' => '{{name}} должно иметь расширение {{extension}}',
  '{{name}} must not have {{extension}} extension' => '{{name}} не должно иметь расширение {{extension}}',

  // FactorException.php
  '{{name}} must be a factor of {{dividend}}' => '{{name}} должно быть множителем {{dividend}}',
  '{{name}} must not be a factor of {{dividend}}' => '{{name}} не должно быть множителем {{dividend}}',

  // FalseValException.php
  '{{name}} is not considered as "False"' => '{{name}} не считается "Ложным (False)"',
  '{{name}} is considered as "False"' => '{{name}} считается "Ложным (False)"',

  // FibonacciException.php
  '{{name}} must be a valid Fibonacci number' => '{{name}} должно быть действительным числом Фибоначчи',
  '{{name}} must not be a valid Fibonacci number' => '{{name}} не должно быть действительным числом Фибоначчи',

  // FileException.php
  '{{name}} must be a file' => '{{name}} должно быть файлом',
  '{{name}} must not be a file' => '{{name}} не должно быть файлом',

  // FiniteException.php
  '{{name}} must be a finite number' => '{{name}} должно быть конечным числом',
  '{{name}} must not be a finite number' => '{{name}} не должно быть конечным числом',

  // FloatTypeException.php
  '{{name}} must be of type float' => '{{name}} должно быть типа float',
  '{{name}} must not be of type float' => '{{name}} не должно быть типа float',

  // FloatValException.php
  '{{name}} must be a float number' => '{{name}} должно быть числом с плавающей запятой (float)',
  '{{name}} must not be a float number' => '{{name}} не должно быть числом с плавающей запятой (float)',

  // GraphException.php
  '{{name}} must contain only graphical characters' => '{{name}} должно содержать только печатные видимые символы',
  '{{name}} must contain only graphical characters and {{additionalChars}}' => '{{name}} должно содержать только печатные видимые символы и {{additionalChars}}',
  '{{name}} must not contain graphical characters' => '{{name}} не должно содержать печатные видимые символы',
  '{{name}} must not contain graphical characters or {{additionalChars}}' => '{{name}} не должно содержать печатные видимые символы или {{additionalChars}}',

  // GreaterThanException.php
  '{{name}} must be greater than {{compareTo}}' => '{{name}} должно быть больше, чем {{compareTo}}',
  '{{name}} must not be greater than {{compareTo}}' => '{{name}} не должно быть больше, чем {{compareTo}}',

  // GroupedValidationException.php - частично в AllOfException.php
  // 'All of the required rules must pass for {{name}}' => 'Все обязательные правила должны выполняться для {{name}}',
  // 'These rules must pass for {{name}}' => 'Правила должны выполняться для {{name}}',
  'None of there rules must pass for {{name}}' => 'Ни одно из правил не должно выполняться для {{name}}',
  // 'These rules must not pass for {{name}}' => 'Правила не должны выполняться для {{name}}',

  // HexRgbColorException.php
  '{{name}} must be a hex RGB color' => '{{name}} должно быть шестнадцатеричным цветом RGB',
  '{{name}} must not be a hex RGB color' => '{{name}} не должно быть шестнадцатеричным цветом RGB',

  // IbanException.php
  '{{name}} must be a valid IBAN' => '{{name}} должно быть действительным IBAN',
  '{{name}} must not be a valid IBAN' => '{{name}} не должно быть действительным IBAN',

  // IdenticalException.php
  '{{name}} must be identical as {{compareTo}}' => '{{name}} должно быть идентично {{compareTo}}',
  '{{name}} must not be identical as {{compareTo}}' => '{{name}} не должно быть идентично {{compareTo}}',

  // ImageException.php
  '{{name}} must be a valid image' => '{{name}} должно быть действительным изображением',
  '{{name}} must not be a valid image' => '{{name}} не должно быть действительным изображением',

  // ImeiException.php
  '{{name}} must be a valid IMEI' => '{{name}} должно быть действительным IMEI',
  '{{name}} must not be a valid IMEI' => '{{name}} не должно быть действительным IMEI',

  // InException.php
  '{{name}} must be in {{haystack}}' => '{{name}} должно быть из списка {{haystack}}',
  '{{name}} must not be in {{haystack}}' => '{{name}} не должно быть из списка {{haystack}}',

  // InfiniteException.php
  '{{name}} must be an infinite number' => '{{name}} должно быть бесконечным числом',
  '{{name}} must not be an infinite number' => '{{name}} не должно быть бесконечным числом',

  // InstanceException.php
  '{{name}} must be an instance of {{instanceName}}' => '{{name}} должно быть экземпляром {{instanceName}}',
  '{{name}} must not be an instance of {{instanceName}}' => '{{name}} не должно быть экземпляром {{instanceName}}',

  // IntTypeException.php
  '{{name}} must be of type integer' => '{{name}} должно быть типа integer',
  '{{name}} must not be of type integer' => '{{name}} не должно быть типа integer',

  // IntValException.php
  '{{name}} must be an integer number' => '{{name}} должно быть целым числом',
  '{{name}} must not be an integer number' => '{{name}} не должно быть целым числом',

  // IpException.php
  '{{name}} must be an IP address' => '{{name}} должно быть IP-адресом',
  '{{name}} must be an IP address in the {{range}} range' => '{{name}} должно быть IP-адресом в диапазоне {{range}}',
  '{{name}} must not be an IP address' => '{{name}} не должно быть IP-адресом',
  '{{name}} must not be an IP address in the {{range}} range' => '{{name}} не должно быть IP-адресом в диапазоне {{range}}',

  // IsbnException.php
  '{{name}} must be a ISBN' => '{{name}} должно быть ISBN',
  '{{name}} must not be a ISBN' => '{{name}} не должно быть ISBN',

  // IterableTypeException.php
  '{{name}} must be iterable' => '{{name}} должно быть итерируемым',
  '{{name}} must not be iterable' => '{{name}} не должно быть итерируемым',

  // JsonException.php
  '{{name}} must be a valid JSON string' => '{{name}} должно быть допустимой JSON строкой',
  '{{name}} must not be a valid JSON string' => '{{name}} не должно быть допустимой JSON строкой',

  // KeyException.php - частично в ValidationException.php
  '{{name}} must be present' => '{{name}} должно присутствовать',
  // '{{name}} must be valid' => '{{name}} должно быть действительным',
  '{{name}} must not be present' => '{{name}} не должно присутствовать',
  '{{name}} must not be valid' => '{{name}} не должно быть действительным',

  // KeyNestedException.php
  'No items were found for key chain {{name}}' => 'Элементы для цепочки ключей {{name}} не найдены',
  'Key chain {{name}} is not valid' => 'Цепочка ключей {{name}} недействительна',
  'Items for key chain {{name}} must not be present' => 'Элементы цепочки для ключей {{name}} не должны присутствовать',
  'Key chain {{name}} must not be valid' => 'Цепочка ключей {{name}} не должна быть допустимой',

  // KeySetException.php - частично в AllOfException.php
  // 'All of the required rules must pass for {{name}}' => 'Все обязательные правила должны выполняться для {{name}}',
  // 'These rules must pass for {{name}}' => 'Правила должны выполняться для {{name}}',
  'Must have keys {{keys}}' => 'Должно иметь ключи {{keys}}',
  // 'None of these rules must pass for {{name}}' => 'Ни одно из правил не должно выполняться для {{name}}',
  // 'These rules must not pass for {{name}}' => 'Правила не должны выполняться для {{name}}',
  'Must not have keys {{keys}}' => 'Не должно иметь ключи {{keys}}',

  // KeyValueException.php
  'Key {{name}} must be present' => 'Ключ {{name}} должен присутствовать',
  '{{baseKey}} must be valid to validate {{comparedKey}}' => '{{baseKey}} должен быть действительным для проверки {{comparedKey}}',
  'Key {{name}} must not be present' => 'Ключ {{name}} не должен присутствовать',
  '{{baseKey}} must not be valid to validate {{comparedKey}}' => '{{baseKey}} не должен быть действительным для проверки {{comparedKey}}',

  // LanguageCodeException.php
  '{{name}} must be a valid ISO 639 {{set}} language code' => '{{name}} должно быть допустимым кодом языка ISO 639 {{set}}',
  '{{name}} must not be a valid ISO 639 {{set}} language code' => '{{name}} не должно быть допустимым кодом языка ISO 639 {{set}}',

  // LeapDateException.php
  '{{name}} must be leap date' => '{{name}} должно быть високосной датой',
  '{{name}} must not be leap date' => '{{name}} не должно быть високосной датой',

  // LeapYearException.php
  '{{name}} must be a leap year' => '{{name}} должно быть високосным годом',
  '{{name}} must not be a leap year' => '{{name}} не должно быть високосным годом',

  // LengthException.php
  '{{name}} must have a length between {{minValue}} and {{maxValue}}' => '{{name}} должно иметь длину от {{minValue}} до {{maxValue}}',
  '{{name}} must have a length greater than {{minValue}}' => '{{name}} должно иметь длину больше, чем {{minValue}}',
  '{{name}} must have a length greater than or equal to {{minValue}}' => '{{name}} должно иметь длину больше или равную {{minValue}}',
  '{{name}} must have a length lower than {{maxValue}}' => '{{name}} должно иметь длину меньше, чем {{maxValue}}',
  '{{name}} must have a length lower than or equal to {{maxValue}}' => '{{name}} должно иметь длину меньше или равную {{maxValue}}',
  '{{name}} must have a length of {{maxValue}}' => '{{name}} должно иметь длину {{maxValue}}',
  '{{name}} must not have a length between {{minValue}} and {{maxValue}}' => '{{name}} не должно иметь длину между {{minValue}} и {{maxValue}}',
  '{{name}} must not have a length greater than {{minValue}}' => '{{name}} не должно иметь длину больше, чем {{minValue}}',
  '{{name}} must not have a length greater than or equal to {{minValue}}' => '{{name}} не должно иметь длину больше или равную {{minValue}}',
  '{{name}} must not have a length lower than {{maxValue}}' => '{{name}} не должно иметь длину меньше, чем {{maxValue}}',
  '{{name}} must not have a length lower than or equal to {{maxValue}}' => '{{name}} не должно иметь длину меньше или равную {{maxValue}}',
  '{{name}} must not have a length of {{maxValue}}' => '{{name}} не должно иметь длину {{maxValue}}',

  // LessThanException.php
  '{{name}} must be less than {{compareTo}}' => '{{name}} должно быть меньше {{compareTo}}',
  '{{name}} must not be less than {{compareTo}}' => '{{name}} не должно быть меньше {{compareTo}}',

  // LowercaseException.php
  '{{name}} must be lowercase' => '{{name}} должно быть в нижнем регистре',
  '{{name}} must not be lowercase' => '{{name}} не должно быть в нижнем регистре',

  // LuhnException.php
  '{{name}} must be a valid Luhn number' => '{{name}} должно быть действительным номером Luhn',
  '{{name}} must not be a valid Luhn number' => '{{name}} не должно быть действительным номером Luhn',

  // MacAddressException.php
  '{{name}} must be a valid MAC address' => '{{name}} должно быть действительным MAC адресом',
  '{{name}} must not be a valid MAC address' => '{{name}} не должно быть действительным MAC адресом',

  // MaxAgeException.php
  '{{name}} must be {{age}} years or less' => '{{name}} должно быть не больше {{age}} лет',
  '{{name}} must not be {{age}} years or less' => '{{name}} не должно быть {{age}} лет или меньше',

  // MaxException.php
  '{{name}} must be less than or equal to {{compareTo}}' => '{{name}} должно быть меньше или равно {{compareTo}}',
  '{{name}} must not be less than or equal to {{compareTo}}' => '{{name}} не должно быть меньше или равно {{compareTo}}',

  // MimetypeException.php
  '{{name}} must have {{mimetype}} MIME type' => '{{name}} должен иметь MIME тип {{mimetype}}',
  '{{name}} must not have {{mimetype}} MIME type' => '{{name}} не должен иметь MIME тип {{mimetype}}',

  // MinAgeException.php
  '{{name}} must be {{age}} years or more' => '{{name}} должно быть {{age}} лет или больше',
  '{{name}} must not be {{age}} years or more' => '{{name}} не должно быть {{age}} лет или больше',

  // MinException.php
  '{{name}} must be greater than or equal to {{compareTo}}' => '{{name}} должно быть больше или равно {{compareTo}}',
  '{{name}} must not be greater than or equal to {{compareTo}}' => '{{name}} не должно быть больше или равно {{compareTo}}',

  // MultipleException.php
  '{{name}} must be multiple of {{multipleOf}}' => '{{name}} должно быть кратно {{multipleOf}}',
  '{{name}} must not be multiple of {{multipleOf}}' => '{{name}} не должно быть кратно {{multipleOf}}',

  // NegativeException.php
  '{{name}} must be negative' => '{{name}} должно быть отрицательным',
  '{{name}} must not be negative' => '{{name}} не должно быть отрицательным',

  // NfeAccessKeyException.php
  '{{name}} must be a valid NFe access key' => '{{name}} должно быть действительным ключом доступа NFe',
  '{{name}} must not be a valid NFe access key' => '{{name}} не должно быть действительным ключом доступа NFe',

  // NifException.php
  '{{name}} must be a NIF' => '{{name}} должно быть NIF',
  '{{name}} must not be a NIF' => '{{name}} не должно быть NIF',

  // NipException.php
  '{{name}} must be a valid Polish VAT identification number' => '{{name}} должно быть действительным польским идентификационным номером плательщика НДС',
  '{{name}} must not be a valid Polish VAT identification number' => '{{name}} не должно быть действительным польским идентификационным номером плательщика НДС',

  // NoException.php
  '{{name}} is not considered as "No"' => '{{name}} не считается как "No"',
  '{{name}} is considered as "No"' => '{{name}} считается как "No"',

  // NoWhitespaceException.php
  '{{name}} must not contain whitespace' => '{{name}} не должно содержать пробелов',
  '{{name}} must contain whitespace' => '{{name}} должно содержать пробелы',

  // NoneOfException.php - частично в AllOfException.php
  // 'None of these rules must pass for {{name}}' => 'Ни одно из правил не должно выполняться для {{name}}',
  'All of these rules must pass for {{name}}' => 'Все правила должны выполняться для {{name}}',

  // NotBlankException.php
  'The value must not be blank' => 'Значение не должно быть пустым',
  '{{name}} must not be blank' => '{{name}} не должно быть пустым',
  'The value must be blank' => 'Значение должно быть пустым',
  '{{name}} must be blank' => '{{name}} должно быть пустым',

  // NotEmojiException.php
  '{{name}} must not contain an Emoji' => '{{name}} не должно содержать смайлов',
  '{{name}} must contain an Emoji' => '{{name}} должно содержать смайлы',

  // NotEmptyException.php
  'The value must not be empty' => 'Значение не должно быть пустым',
  '{{name}} must not be empty' => '{{name}} не должно быть пустым',
  'The value must be empty' => 'Значение должно быть пустым',
  '{{name}} must be empty' => '{{name}} должно быть пустым',

  // NotOptionalException.php
  'The value must not be optional' => 'Значение является обязательным',
  '{{name}} must not be optional' => '{{name}} является обязательным',
  'The value must be optional' => 'Значение должно быть необязательным',
  '{{name}} must be optional' => '{{name}} должно быть необязательным',

  // NullTypeException.php
  '{{name}} must be null' => '{{name}} должно быть null',
  '{{name}} must not be null' => '{{name}} не должно быть null',

  // NullableException.php - частично в NullTypeException.php
  'The value must be nullable' => 'Значение должно быть null-допустимым',
  '{{name}} must be nullable' => '{{name}} должно быть null-допустимым',
  'The value must not be null' => 'Значение не должно быть null',
  // '{{name}} must not be null' => '{{name}} не должно быть null',

  // NumberException.php
  '{{name}} must be a number' => '{{name}} должно быть числом',
  '{{name}} must not be a number' => '{{name}} не должно быть числом',

  // NumericValException.php
  '{{name}} must be numeric' => '{{name}} должно быть числовым',
  '{{name}} must not be numeric' => '{{name}} не должно быть числовым',

  // ObjectTypeException.php
  '{{name}} must be of type object' => '{{name}} должно быть типа object',
  '{{name}} must not be of type object' => '{{name}} не должно быть типа object',

  // OddException.php
  '{{name}} must be an odd number' => '{{name}} должно быть нечетное число',
  '{{name}} must not be an odd number' => '{{name}} не должно быть нечетное число',

  // OneOfException.php
  'Only one of these rules must pass for {{name}}' => 'Только одно из правил должно выполниться для {{name}}',
  'Only one of these rules must not pass for {{name}}' => 'Только одно из правил не должно выполниться для {{name}}',

  // OptionalException.php - совпадает с NotOptionalException.php
  // 'The value must be optional' => 'Значение должно быть необязательным',
  // '{{name}} must be optional' => '{{name}} должно быть необязательным',
  // 'The value must not be optional' => 'Значение является обязательным',
  // '{{name}} must not be optional' => '{{name}} является обязательным',

  // PerfectSquareException.php
  '{{name}} must be a valid perfect square' => '{{name}} должно быть действительным полным квадратом',
  '{{name}} must not be a valid perfect square' => '{{name}} не должно быть действительным полным квадратом',

  // PeselException.php
  '{{name}} must be a valid PESEL' => '{{name}} должно быть действительным PESEL',
  '{{name}} must not be a valid PESEL' => '{{name}} не должно быть действительным PESEL',

  // PhoneException.php
  '{{name}} must be a valid telephone number' => '{{name}} должно быть действительным номером телефона',
  '{{name}} must not be a valid telephone number' => '{{name}} не должно быть действительным номером телефона',

  // PhpLabelException.php
  '{{name}} must be a valid PHP label' => '{{name}} должно быть допустимой меткой PHP',
  '{{name}} must not be a valid PHP label' => '{{name}} не должно быть допустимой меткой PHP',

  // PisException.php
  '{{name}} must be a valid PIS number' => '{{name}} должно быть номером PIS',
  '{{name}} must not be a valid PIS number' => '{{name}} не должно быть номером PIS',

  // PolishIdCardException.php
  '{{name}} must be a valid Polish Identity Card number' => '{{name}} должно быть действительным номером польского удостоверения личности',
  '{{name}} must not be a valid Polish Identity Card number' => '{{name}} не должно быть действительным номером польского удостоверения личности',

  // PositiveException.php
  '{{name}} must be positive' => '{{name}} должно быть положительным',
  '{{name}} must not be positive' => '{{name}} не должно быть положительным',

  // PostalCodeException.php
  '{{name}} must be a valid postal code on {{countryCode}}' => '{{name}} должно быть действительным почтовым индексом для {{countryCode}}',
  '{{name}} must not be a valid postal code on {{countryCode}}' => '{{name}} не должно быть действительным почтовым индексом для {{countryCode}}',

  // PrimeNumberException.php
  '{{name}} must be a valid prime number' => '{{name}} должно быть допустимым простым числом',
  '{{name}} must not be a valid prime number' => '{{name}} не должно быть допустимым простым числом',

  // PrintableException.php
  '{{name}} must contain only printable characters' => '{{name}} должно содержать только печатные символы',
  '{{name}} must contain only printable characters and "{{additionalChars}}"' => '{{name}} должно содержать только печатные символы и "{{additionalChars}}"',
  '{{name}} must not contain printable characters' => '{{name}} не должно содержать печатные символы',
  '{{name}} must not contain printable characters or "{{additionalChars}}"' => '{{name}} не должно содержать печатные символы или "{{additionalChars}}"',

  // PunctException.php
  '{{name}} must contain only punctuation characters' => '{{name}} должно содержать только знаки пунктуации',
  '{{name}} must contain only punctuation characters and {{additionalChars}}' => '{{name}} должно содержать только знаки пунктуации и {{additionalChars}}',
  '{{name}} must not contain punctuation characters' => '{{name}} не должно содержать знаки пунктуации',
  '{{name}} must not contain punctuation characters or {{additionalChars}}' => '{{name}} не должно содержать знаки пунктуации или {{additionalChars}}',

  // ReadableException.php
  '{{name}} must be readable' => '{{name}} должен быть читаемым',
  '{{name}} must not be readable' => '{{name}} не должен быть читаемым',

  // RegexException.php
  '{{name}} must validate against {{regex}}' => '{{name}} должно соответствовать регулярному выражению {{regex}}',
  '{{name}} must not validate against {{regex}}' => '{{name}} не должно соответствовать регулярному выражению {{regex}}',

  // ResourceTypeException.php
  '{{name}} must be a resource' => '{{name}} должно быть ресурсом',
  '{{name}} must not be a resource' => '{{name}} не должно быть ресурсом',

  // RomanException.php
  '{{name}} must be a valid Roman numeral' => '{{name}} должно быть допустимой римской цифрой',
  '{{name}} must not be a valid Roman numeral' => '{{name}} не должно быть допустимой римской цифрой',

  // ScalarValException.php
  '{{name}} must be a scalar value' => '{{name}} должно быть скалярным значением',
  '{{name}} must not be a scalar value' => '{{name}} не должно быть скалярным значением',

  // SfException.php
  '{{name}} must be valid for {{constraint}}' => '{{name}} должно быть действительным для {{constraint}}',
  '{{name}} must not be valid for {{constraint}}' => '{{name}} не должно быть действительным для {{constraint}}',

  // SizeException.php
  '{{name}} must be between {{minSize}} and {{maxSize}}' => '{{name}} должно быть между {{minSize}} и {{maxSize}}',
  '{{name}} must be greater than {{minSize}}' => '{{name}} должно быть больше {{minSize}}',
  '{{name}} must be lower than {{maxSize}}' => '{{name}} должно быть меньше {{maxSize}}',
  '{{name}} must not be between {{minSize}} and {{maxSize}}' => '{{name}} не должно быть между {{minSize}} и {{maxSize}}',
  '{{name}} must not be greater than {{minSize}}' => '{{name}} не должно быть больше {{minSize}}',
  '{{name}} must not be lower than {{maxSize}}' => '{{name}} не должно быть меньше {{maxSize}}',

  // SlugException.php
  '{{name}} must be a valid slug' => '{{name}} должно быть действительным slug',
  '{{name}} must not be a valid slug' => '{{name}} не должно быть действительным slug',

  // SortedException.php
  '{{name}} must be sorted in ascending order' => '{{name}} должно быть отсортировано в порядке возрастания',
  '{{name}} must be sorted in descending order' => '{{name}} должно быть отсортировано в порядке убывания',
  '{{name}} must not be sorted in ascending order' => '{{name}} не должно быть отсортировано в порядке возрастания',
  '{{name}} must not be sorted in descending order' => '{{name}} не должно быть отсортировано в порядке убывания',

  // SpaceException.php
  '{{name}} must contain only space characters' => '{{name}} должно содержать только пробелы',
  '{{name}} must contain only space characters and {{additionalChars}}' => '{{name}} должно содержать только пробелы и {{additionalChars}}',
  '{{name}} must not contain space characters' => '{{name}} не должно содержать пробелы',
  '{{name}} must not contain space characters or {{additionalChars}}' => '{{name}} не должно содержать пробелы или {{additionalChars}}',

  // StartsWithException.php
  '{{name}} must start with {{startValue}}' => '{{name}} должно начинаться с {{startValue}}',
  '{{name}} must not start with {{startValue}}' => '{{name}} не должно начинаться с {{startValue}}',

  // StringTypeException.php
  '{{name}} must be of type string' => '{{name}} должно быть строковым типом (string)',
  '{{name}} must not be of type string' => '{{name}} не должно быть строковым типом (string)',

  // StringValException.php
  '{{name}} must be a string' => '{{name}} должно быть строкой',
  '{{name}} must not be string' => '{{name}} не должно быть строкой',

  // SubdivisionCodeException.php
  '{{name}} must be a subdivision code of {{countryName}}' => '{{name}} должно быть кодом подразделения {{countryName}}',
  '{{name}} must not be a subdivision code of {{countryName}}' => '{{name}} не должно быть кодом подразделения {{countryName}}',

  // SubsetException.php
  '{{name}} must be subset of {{superset}}' => '{{name}} должно быть подмножеством {{superset}}',
  '{{name}} must not be subset of {{superset}}' => '{{name}} не должно быть подмножеством {{superset}}',

  // SymbolicLinkException.php
  '{{name}} must be a symbolic link' => '{{name}} должно быть символьной ссылкой',
  '{{name}} must not be a symbolic link' => '{{name}} не должно быть символьной ссылкой',

  // TimeException.php
  '{{name}} must be a valid time in the format {{sample}}' => '{{name}} должно быть допустимым временем в формате {{sample}}',
  '{{name}} must not be a valid time in the format {{sample}}' => '{{name}} не должно быть допустимым временем в формате {{sample}}',

  // TldException.php
  '{{name}} must be a valid top-level domain name' => '{{name}} должно быть действительным доменным именем верхнего уровня',
  '{{name}} must not be a valid top-level domain name' => '{{name}} не должно быть действительным доменным именем верхнего уровня',

  // TrueValException.php
  '{{name}} is not considered as "True"' => '{{name}} не считается "Истинным (True)"',
  '{{name}} is considered as "True"' => '{{name}} считается "Истинным (True)"',

  // TypeException.php
  '{{name}} must be {{type}}' => '{{name}} должно быть {{type}}',
  '{{name}} must not be {{type}}' => '{{name}} не должно быть {{type}}',

  // UniqueException.php
  '{{name}} must not contain duplicates' => '{{name}} не должно содержать дубликатов',
  '{{name}} must contain duplicates' => '{{name}} должно содержать дубликаты',

  // UploadedException.php
  '{{name}} must be an uploaded file' => '{{name}} должно быть загруженным файлом',
  '{{name}} must not be an uploaded file' => '{{name}} не должно быть загруженным файлом',

  // UppercaseException.php
  '{{name}} must be uppercase' => '{{name}} должно быть в верхнем регистре',
  '{{name}} must not be uppercase' => '{{name}} не должно быть в верхнем регистре',

  // UrlException.php
  '{{name}} must be a URL' => '{{name}} должно быть URL',
  '{{name}} must not be a URL' => '{{name}} не должно быть URL',

  // UuidException.php
  '{{name}} must be a valid UUID' => '{{name}} должно быть допустимым UUID',
  '{{name}} must be a valid UUID version {{version}}' => '{{name}} должно быть допустимым UUID версии {{version}}',
  '{{name}} must not be a valid UUID' => '{{name}} не должно быть допустимым UUID',
  '{{name}} must not be a valid UUID version {{version}}' => '{{name}} не должно быть допустимым UUID версии {{version}}',

  // ValidationException.php - частично в KeyException.php
  '{{name}} must be valid' => '{{name}} должно быть действительным',
  // '{{name}} must not be valid' => '{{name}} не должно быть действительным',

  // VersionException.php
  '{{name}} must be a version' => '{{name}} должно быть номером версии',
  '{{name}} must not be a version' => '{{name}} не должно быть номером версии',

  // VideoUrlException.php
  '{{name}} must be a valid video URL' => '{{name}} должно быть действительным URL видео',
  '{{name}} must be a valid {{service}} video URL' => '{{name}} должно быть действительным {{service}} URL видео',
  '{{name}} must not be a valid video URL' => '{{name}} не должно быть действительным URL видео',
  '{{name}} must not be a valid {{service}} video URL' => '{{name}} не должно быть действительным {{service}} URL видео',

  // VowelException.php
  '{{name}} must contain only vowels' => '{{name}} должно содержать только гласные',
  '{{name}} must contain only vowels and {{additionalChars}}' => '{{name}} должно содержать только гласные и {{additionalChars}}',
  '{{name}} must not contain vowels' => '{{name}} не должно содержать гласные',
  '{{name}} must not contain vowels or {{additionalChars}}' => '{{name}} не должно содержать гласные или {{additionalChars}}',

  // WritableException.php
  '{{name}} must be writable' => '{{name}} должен быть доступен для записи',
  '{{name}} must not be writable' => '{{name}} не должен быть доступен для записи',

  // XdigitException.php
  '{{name}} contain only hexadecimal digits' => '{{name}} должно содержать только шестнадцатеричные цифры',
  '{{name}} contain only hexadecimal digits and {{additionalChars}}' => '{{name}} должно содержать только шестнадцатеричные цифры и {{additionalChars}}',
  '{{name}} must not contain hexadecimal digits' => '{{name}} не должно содержать шестнадцатеричные цифры',
  '{{name}} must not contain hexadecimal digits or {{additionalChars}}' => '{{name}} не должно содержать шестнадцатеричные цифры или {{additionalChars}}',

  // YesException.php
  '{{name}} is not considered as "Yes"' => '{{name}} не считается как "Yes"',
  '{{name}} is considered as "Yes"' => '{{name}} считается как "Yes"',
];
