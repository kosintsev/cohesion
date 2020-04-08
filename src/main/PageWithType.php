<?php


namespace Cohesion;


class PageWithType implements Page
{
    private Page $origin;
    private String $type;

    public function __construct(Page $page, String $ctype)
    {
        $this->origin = $page;
        $this->type = $ctype;
    }

    function with(String $key, String $value): Page
    {
        return $this;
    }

    function via(Output $output): Output
    {
        return $this->origin->via($output->with("Content-Type", $this->type));
    }
}