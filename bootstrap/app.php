<?php

use Slim\Factory\AppFactory;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Translation\FileLoader;
use Illuminate\Translation\Translator;
use Respect\Validation\Factory;

require __DIR__ . '/../vendor/autoload.php';

// TODO: needs to implement
$locale = 'ru';

// create translator instance
$loader = new FileLoader(new Filesystem, __DIR__ . '/../resources/lang');
$translator = new Translator($loader, $locale);

// setup validator instance
Factory::setDefaultInstance(
  (new Factory())
    ->withRuleNamespace('App\\Validation\\Rules')
    ->withExceptionNamespace('App\\Validation\\Exceptions')
    ->withTranslator(
      function (string $original) use ($translator): string {
        $source = 'respect-validation.';
        $translated = $translator->get($source . $original);
        if (strpos($translated, $source) === 0) { // str_starts_with in PHP8
          return $original;
        }
        return $translated;
      }
    )
);

// create slim app
$app = AppFactory::create();

// example routes
require __DIR__ . '/routes.php';

return $app;
