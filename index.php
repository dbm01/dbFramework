<?php
echo  __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload
require_once __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload

use \HelloWorld\SayHello;
use \Configuration\ConfigurationMaker;
//use Aura\Sql\ConnectionLocator;

echo SayHello::world();

echo "\n";
$configurationMaker = new ConfigurationMaker();
echo "<hr/>";
$configurationMaker->export();
echo "<hr/>";
$configurationMaker->test();
echo "<hr/>";
$configurationMaker->test1();
echo "<hr/>";
echo "<hr/><br/>FIN";