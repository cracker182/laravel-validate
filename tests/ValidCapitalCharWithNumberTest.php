<?php

namespace Milwad\LaravelValidate\Tests;

use Milwad\LaravelValidate\Rules\ValidCapitalCharWithNumber;

class ValidCapitalCharWithNumberTest extends BaseTest
{
    /**
     * Set up.
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * Test capital chat with number is valid.
     *
     * @test
     * @return void
     */
    public function capital_char_with_number_is_valid()
    {
        $rules = ['capital_char_with_number' => [new ValidCapitalCharWithNumber()]];
        $data = ['capital_char_with_number' => 'MILWAD-84'];
        $passes = $this->app['validator']->make($data, $rules)->passes();

        $this->assertTrue($passes);
    }
}