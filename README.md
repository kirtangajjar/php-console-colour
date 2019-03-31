# PHP Console Colour

[![PHP Version](https://img.shields.io/packagist/php-v/alecrabbit/php-console-colour.svg)](https://php.net/)
[![Build Status](https://travis-ci.com/alecrabbit/php-console-colour.svg?branch=master)](https://travis-ci.com/alecrabbit/php-console-colour)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/alecrabbit/php-console-colour/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/alecrabbit/php-console-colour/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/alecrabbit/php-console-colour/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/alecrabbit/php-console-colour/?branch=master)
[![Total Downloads](https://poser.pugx.org/alecrabbit/php-console-colour/downloads)](https://packagist.org/packages/alecrabbit/php-console-colour)

[![Latest Stable Version](https://poser.pugx.org/alecrabbit/php-console-colour/v/stable)](https://packagist.org/packages/alecrabbit/php-console-colour)
[![Latest Version](https://img.shields.io/packagist/v/alecrabbit/php-console-colour.svg)](https://packagist.org/packages/alecrabbit/php-console-colour)
[![Latest Unstable Version](https://poser.pugx.org/alecrabbit/php-console-colour/v/unstable)](https://packagist.org/packages/alecrabbit/php-console-colour)

[![License](https://poser.pugx.org/alecrabbit/php-console-colour/license)](https://packagist.org/packages/alecrabbit/php-console-colour)
<!--[![Average time to resolve an issue](http://isitmaintained.com/badge/resolution/alecrabbit/php-console-colour.svg)](http://isitmaintained.com/project/alecrabbit/php-console-colour "Average time to resolve an issue")-->
<!--[![Percentage of issues still open](http://isitmaintained.com/badge/open/alecrabbit/php-console-colour.svg)](http://isitmaintained.com/project/alecrabbit/php-console-colour "Percentage of issues still open")-->

based on [JakubOnderka/PHP-Console-Color](https://github.com/JakubOnderka/PHP-Console-Color)

### ConsoleColor::class

// TODO 

### Terminal::class
##### Usage 
```php
    $term = new Terminal();
    $width = $term->width(); 
```
This class is used as a part of a package to determine color support, also it can be used to determine width and height of terminal window.
Checks performed on first call, if you want to check again use `$recheck` parameter. 
> Note: Creating new instance of terminal object does not change width and height values(they are static). If you want to know resized terminal dimensions use `$recheck` parameter.
> ```php
> $term = new Terminal();
> $width = $term->width(); // width (e.g. 80)
> 
>    /* terminal resized by user */
> 
> $term2 = new Terminal();
> $width = $term2->width(); // same width value (80)
> $width = $term2->width(true); // new width value (e.g. 120)
> ``` 
> Same with color support but probability of changing it in runtime is practically zero.

Class methods:
```php
    public function supportsColor(bool $recheck = false): bool;

    public function supports256Color(bool $recheck = false): bool;

    public function width(bool $recheck = false): int;

    public function height(bool $recheck = false): int;
```
##### Notes on Docker environment
To ensure color support you can pass one(or both) env variables to container
```dockerfile
...
    environment:
      TERM: "xterm"  # standard color support
      DOCKER_TERM: "xterm-256color"  # 256 color support
...
```

### Theme::class
##### Usage 
```php
    $theme = new Theme();
    echo $theme->red('This text is red.') . PHP_EOL;
    echo $theme->underlineBold('This text is underlined and bold.') . PHP_EOL;
```
Basically methods of this class just applying corresponding escape sequences to `$text`
```php
$colorized = $theme->darkItalic('This text is dark and italic.') // '\033[2;3mThis text is dark and italic.\033[0m'
```
##### Methods
```php
/**
 * @method italic(string $text)
 * @method dark(string $text)
 * @method darkItalic(string $text)
 * @method white(string $text)
 * @method whiteBold(string $text)
 * @method comment(string $text)
 * @method yellow(string $text)
 * @method error(string $text)
 * @method red(string $text)
 * @method green(string $text)
 * @method info(string $text)
 * @method underline(string $text)
 * @method underlineBold(string $text)
 * @method underlineItalic(string $text)
 */
```
> Note: new methods will be added.
##### Add your own methods
 [How to extend `Theme::class`](docs/howToExtendThemeClass.md)

