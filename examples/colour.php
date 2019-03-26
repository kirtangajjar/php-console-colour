<?php

use AlecRabbit\ConsoleColour\ConsoleColour;

const TEXT = '  *** Sample text ***  ';
require_once __DIR__ . '/../vendor/autoload.php';

$consoleColor = new ConsoleColour();

echo 'Colors are supported: ' . ($consoleColor->isSupported() ? 'Yes' : 'No') . PHP_EOL;
echo '256 colors are supported: ' . ($consoleColor->are256ColorsSupported() ? 'Yes' : 'No') . PHP_EOL . PHP_EOL;

if ($consoleColor->isSupported()) {
    foreach ($consoleColor->getPossibleStyles() as $style) {
        echo str_pad("$style: ", 20) . $consoleColor->apply($style, TEXT) . PHP_EOL;
    }
}

echo PHP_EOL;

if ($consoleColor->are256ColorsSupported()) {
    echo '256 colors:' . PHP_EOL;

    echo "Foreground colors:\n";
    for ($i = 1; $i <= 255; $i++) {
        echo $consoleColor->apply("color_$i", str_pad($i, 6, ' ', STR_PAD_BOTH));

        if ($i % 15 === 0) {
            echo PHP_EOL;
        }
    }

    echo "\nBackground colors:\n";

    for ($i = 1; $i <= 255; $i++) {
        echo $consoleColor->apply("bg_color_$i", str_pad($i, 6, ' ', STR_PAD_BOTH));

        if ($i % 15 === 0) {
            echo PHP_EOL;
        }
    }

    echo PHP_EOL;
}
