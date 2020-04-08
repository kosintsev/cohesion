<?php
require_once '../vendor/autoload.php';

use Cohesion\PageWithType;
use Cohesion\SimpleOutput;
use Cohesion\SimplePage;
use Cohesion\TextPage;

$page = new PageWithType(
    new SimplePage('Hi!'),
    'text/html'
);
$page
    ->with("X-Path", "/user/account")
    ->with("Accept", "text/html")
;
$output = $page->via(new SimpleOutput(''));
echo($output->toString());