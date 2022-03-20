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
    ->withTranslator('respectValidatorCustomTranslator')
);

function respectValidatorCustomTranslator(string $msg): string
{
  global $translator;
  $source = 'respect-validation.';
  $message = $translator->get($source . $msg);
  if (strpos($message, $source) === 0) {
    $message = substr($message, strlen($source));
  }
  return $message;
}

// create slim app
$app = AppFactory::create();

// example routes
require __DIR__ . '/routes.php';

return $app;
