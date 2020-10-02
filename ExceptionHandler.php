<?php

namespace Pantheion\Charon;

class ExceptionHandler
{
    public function __construct()
    {
        $this->setUp();
    }

    protected function setUp()
    {
        set_exception_handler([$this, 'handle']);
    }

    public function handle($exception)
    {
        require_once "views/exception.php";
    }
}