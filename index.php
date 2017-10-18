<?php
require_once 'define.php';

function __autoload($className)
{
    require_once LIBRARY_PATH .DS. "{$className}.php";
}

$bootstrap = new Bootstrap();
