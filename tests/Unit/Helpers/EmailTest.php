<?php

namespace Tests\Unit\Helpers;

use App\Helpers\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_email_validation()
    {
        $result = Email::validate('i@admin.com');
        $this->assertTrue($result);

        $result = Email::validate('i@@admin.com');
        $this->assertFalse($result);
    }
}
