<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_email_helper_function()
    {
        $result = validate_email('i@admin.com');
        $this->assertTrue($result);

        $result = validate_email('i@@admin.com');
        $this->assertFalse($result);
    }
}
