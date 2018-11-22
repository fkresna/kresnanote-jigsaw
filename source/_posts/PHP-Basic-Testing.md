---
extends: _layouts.master
section: body
title: "PHP Basic Unit Test"
author: "Freddy Tjoenedi"
---

# PHP Basic testing 

This tutorial will teach you about basic testing in PHP using [phpunit](https://phpunit.de/)

The time I created this tutorial I use PHP 7.2 and PHPUnit 7 

Approach that I will use is Test Driven Development, so I will create a test case first then I will create the PHP code, I will create basic calculator addition script.

You would need basic knowledge of object oriented programming in PHP in order to understand this tutorial 100% because it's impossible to do unit testing without PHPUnit :) and terminal

## Install composer and PHPUnit
The instruction to install composer is on https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos

After you install composer, Run in your console
`composer require phpunit/phpunit`

your composer.json should looks like

```
{
    "require": {
        "phpunit/phpunit": "^7.4"
    }
}
```

## Create The First Unit Test

```
<?php
namespace Tests\Unit;

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAddition()
    {
        $calculator = new Calculator();

        $this->assertEquals(7, $calculator->addition(3, 4));
    }
}
```

Then I tried to run it using this command `vendor/bin/phpunit Tests/Unit/CalculatorTest.php` and I got this error

```
PHPUnit 7.4.0 by Sebastian Bergmann and contributors.

E                                                                   1 / 1 (100%)

Time: 123 ms, Memory: 4.00MB

There was 1 error:

1) Tests\Unit\CalculatorTest::testSubstraction
Error: Class 'Tests\Unit\Calculator' not found

/var/www/html/PHP_TDD/Tests/Unit/CalculatorTest.php:12

ERRORS!
Tests: 1, Assertions: 0, Errors: 1.
```

Steps that I just do so far can be seen in this [commit](https://github.com/fkresna/PHP_TDD/commit/732447b26aeb6f7866f6f8061226e279c212905e)

## Create Calculator Class

```
<?php
namespace App;

require_once __DIR__ . '/../vendor/autoload.php';

class Calculator
{
    public function addition($firstNumber, $secondNumber): int
    {
        return $firstNumber + $secondNumber;
    }
}
```

then run this command again  `vendor/bin/phpunit Tests/Unit/CalculatorTest.php` and I got this error

```
E                                                                   1 / 1 (100%)

Time: 154 ms, Memory: 4.00MB

There was 1 error:

1) Tests\Unit\CalculatorTest::testSubstraction
Error: Class 'App\Calculator' not found

/var/www/html/PHP_TDD/Tests/Unit/CalculatorTest.php:13

ERRORS!
Tests: 1, Assertions: 0, Errors: 1.
```

This error is because phpunit could not found Calculator so we need to use autoload in composer, Update composer.json into

```
{
    "require": {
        "phpunit/phpunit": "^7.4"
    },
    "autoload": {
        "psr-4": {
            "App\\": "src/",
            "Tests\\": "Tests/"
        }
    }
}

``` 

After that we need to run `composer dump-autoload` then re-run `vendor/bin/phpunit Tests/Unit/CalculatorTest.php` the output should be like
```
PHPUnit 7.4.0 by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: 124 ms, Memory: 4.00MB

OK (1 test, 1 assertion)
```

## Reference:
* https://phpunit.de/getting-started/phpunit-7.html
