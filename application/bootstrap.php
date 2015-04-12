<?php
/**
 * Created by PhpStorm.
 * User: edge
 * Date: 2015/04/12
 * Time: 12:09
 */
require 'core/ClassLoader.php';

$loader = new ClassLoader();
$loader->registerDir(dirname(__FILE__).'/core');
$loader->registerDir(dirname(__FILE__).'/models');
$loader->register();