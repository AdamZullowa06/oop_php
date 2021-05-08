<?php

define('NAMA', 'Adam Zullowa');
echo NAMA;

echo "<br>";

const UMUR = 19;
echo UMUR . "<br>";


class Coba
{
    const NAMA = 'Adam Zullowa';
}

echo Coba::NAMA . "<br>";

function coba1()
{
    return __FUNCTION__;
}

echo coba1() . "<br>";


// MAGIC CONSTANT : 
// __LINE__
// __FILE__
// __DIR__
// __FUNCTION__
// __CLASS__
// __TRAIT__
// __METHOD__
// __NAMESPACE__