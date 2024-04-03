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
