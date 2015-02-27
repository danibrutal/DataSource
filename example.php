<?php
/**
 * Created by PhpStorm.
 * User: danibrutal
 * Date: 26/02/15
 * Time: 21:46
 */

require 'vendor/autoload.php';

use DataSource\Origins\CSVDataSource;

$a = new CSVDataSource(__DIR__ . '/example.csv');

while($line = $a->nextItem()) {

    var_dump($line);
}