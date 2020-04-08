<?php


use Cohesion\PageWithType;
use Cohesion\SimpleOutput;
use Cohesion\SimplePage;
use Cohesion\TextPage;
use PHPUnit\Framework\TestCase;

class TextPageTest extends TestCase
{

    protected function setUp(): void
    {
        parent::setUp();
    }

    /** @test */
    public function TestWorks()
    {
        $page = new PageWithType(
            new SimplePage('Hi!'),
            'text/html'
        );
        $page->with("X-Path", "/user/account")
            ->with("Accept", "text/html")
        ;
        $output = $page->via(new SimpleOutput(''));
        $this->assertIsString($output->toString());
        printf($output->toString());

    }
}
