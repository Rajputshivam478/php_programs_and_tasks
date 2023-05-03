<?php

function read($filename)
{
    $file = fopen($filename, 'r');
    if (file_exists($filename)) {
        fread($file, filesize($file));
    } else {
        echo "file doesn't exists.";
    }
    fclose($file);
}

function write($filename, $string)
{


    if (file_exists($filename)) {
        $file = fopen($filename, 'w');
        fwrite($file, $string);
        echo "file created / exits in file  system .";
        fclose($file);
    } else {
        echo "file doesn't exists.";
    }
}

function append($filename, $string)
{
    $file = fopen($filename, 'a');


    if (file_exists($filename)) {
        fwrite($file, $string);
        echo "file updated.";
        fclose($file);
    } else {
        echo "file doesn't exists.";
    }
}

function createfile($filename, $string)
{

    if (!file_exists($filename)) {
        $file = fopen($filename, 'x');
        echo "file created.";
    } else {
        echo "file already exists.";
    }
}

function deletefile($filename)
{
    if (file_exists($filename)) {
        unlink($filename);
        if (file_exists($filename)) {
            echo "something not good ! file not removed..";
        } else {
            echo "file deleted..";
        }
    } else {
        echo "file not exists..";
    }
}

?>