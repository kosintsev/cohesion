<?php


namespace Cohesion;


class SimplePage implements Page
{
    private String $body;

    public function __construct(String $text)
    {
        $this->body = $text;
    }

    function with(String $key, String $value): Page
    {
        return $this;
    }

    function via(Output $output): Output
    {
        return $output
            ->with("Content-Length", (string) mb_strlen($this->body, 'utf-8'))
            ->with("X-Body", $this->body);
    }
}