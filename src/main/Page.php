<?php


namespace Cohesion;


interface Page
{
    function with(String $key, String $value) : Page;
    function via(Output $output) : Output;
}