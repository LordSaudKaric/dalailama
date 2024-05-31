<?php
use Dalailama\Bootstrap\Application;

require_once __DIR__ . '/../config/init.php';
require_once ROOT_PATH . DS . 'vendor'    . DS . 'autoload.php';

Application::run();