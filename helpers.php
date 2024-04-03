<?php

/** 
 * Get the base Path
 * 
 * @param string $path
 * @return string
 */


function basePath($path = '')
{
    // echo $path;

    return __DIR__ . '/' . $path;
}


/**
 * Load a View 
 * 
 * @param string $name
 * @return void
 */


function loadView($name)
{
    $viewPath =  basePath("views/{$name}.view.php");
    inspect($viewPath);

    if (file_exists($viewPath)) {
        require $viewPath;
    } else {
        echo "View '{$name} not Found! '";
    }
}


/**
 * Load a Partials 
 * 
 * @param string $name
 * @return void
 */


function loadPartial($name)
{
    $partialPath =   basePath("views/partials/{$name}.php");

    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "View '{$name} not Found! '";
    }
}


/**
 * Inspect a value(s)
 * 
 * @param mixed $value
 * @return void
 * 
 * 
 * 
 */
function inspect($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}


/**
 * Inspect a value(s) and die
 * 
 * @param mixed $value
 * @return void
 * 
 * 
 * 
 */
function inspectAndDie($value)
{
    echo "<pre>";
    die(var_dump($value));
    echo "</pre>";
}
