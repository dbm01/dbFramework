<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use \HelloWorld\SayHello;
use \Configuration\ConfigurationMaker;
//use Aura\Sql\ConnectionLocator;

echo SayHello::world();

echo "\n";
$configurationMaker = new ConfigurationMaker();
//$configurationMaker->export();
echo "\nFIN";