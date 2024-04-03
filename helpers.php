<?php

/** 
 * Get the base Path
 * 
 * @param string $path
 * @return string
 */


function basePath($path = '')

{
    echo $path;

    return __DIR__ . '/' . $path;
}
