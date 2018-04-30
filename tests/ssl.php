<?php

require __DIR__.'/../vendor/autoload.php';

use Docker\Docker;

$option = Docker::createOptionArray('127.0.0.1:2375');

$docker = Docker::docker($option);

$container=$docker->container;

$image=$docker->image;

/**
 * docker run -it -d -v lnmp-data:/app php:7.2.5-alpine3.7 sh
 */

var_dump($image->list());

//var_dump($output);

//var_dump($docker->container());

//$docker = Docker::docker();
