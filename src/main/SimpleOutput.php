<?php


namespace Cohesion;


class SimpleOutput implements Output
{
    private String $before;

    public function __construct(String $txt)
    {
        $this->before = $txt;
    }

    public function toString() {
        return $this->before;
    }

    function with(String $name, String $value): Output
    {
        if (mb_strlen($this->before, 'utf-8') == 0) {
            $this->before = "HTTP/1.1 200 OK\r\n" . $this->before;
        }

        if ("X-Body" == $name) {
            $this->before .= "\r\n" . $value;
        } else {
            $this->before .= $name . ': ' . $value . "\r\n";
        }

        return new SimpleOutput((string)$this->before);
    }

    function writeTo($output): void
    {
        $output->write(unpack('C*', $this->before));
    }
}