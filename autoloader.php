<?php
session_start();

//This function will be called to resolve the name of the class
//and try to find it directly

function loadClass($classname) {
    $classdir = 'classes';
    $classfile = strtolower($classname) . '.class.php';
    //include the file from directory
    include($classdir . '/' . $classfile);
    
}

spl_autoload_register(loadClass);

?>