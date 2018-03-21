<?php

/**
 * Debug a variable and kill the application if necessary
 *
 * @param $var String
 * @param [$kill Boolean]
 * @return Void
 */
function debug($var, $kill = false){
    if(is_array($var)){
        echo "<pre>";
        var_dump($var);
        echo "</pre><br>";
        echo "<p>Quantidade: ". count($var) ."</p><br>";
    }else{
        var_dump($var);
    }

    if($kill){
        die("<br>Process closed in debug");
    }
}

/**
 * Save an Array to a Json file
 *
 * @param $fileName String
 * @param $data Array
 * @return Void
 */
function saveJson($fileName, $data){
    $fp = fopen($fileName, 'a');
    fwrite($fp, json_encode($data));
    fclose($fp);
}

/**
 * Read JSON file
 *
 * @param $filePath
 * @return \Stdclass
 */
function readJson($filePath){
    $file = file_get_contents($filePath);

    return json_decode($file);
}
