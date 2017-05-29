<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
require "Configuration.php";


use \HelloWorld\SayHello;
use \Configuration\ConfigurationMaker;
//use Aura\Sql\ConnectionLocator;
echo '<br/>';
echo '<hr/>';
$z = Configuration::x;
var_dump($z);
echo '<hr/>';
echo '<br/>';


echo SayHello::world();

echo "\n";
$configurationMaker = new ConfigurationMaker();
$configurationMaker->export();
echo "\nFIN<br/><hr/>";
Configuration::get();