<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

// Here we can update test case Class
abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
}
