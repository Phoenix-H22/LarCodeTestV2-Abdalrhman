<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostApiTest extends TestCase
{
    use RefreshDatabase; // Resets the database after each test

    /** @test */
    public function it_can_create_a_post_with_valid_inputs()
    {
        // Your code here...
    }

    /** @test */
    public function it_cannot_create_a_post_with_invalid_inputs()
    {
        // Your code here...
    }
}
