<?php


namespace Cohesion;


interface Output
{
    function with(String $name, String $value): Output;
    function writeTo($output): void;
}