<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Home extends TestCase
{
    public function test_homepage_is_working_correctly(): void
    {
        $response = $this->get('api/home');
        $response->assertSeeText('This is a Homepage');

        // $response->assertStatus(200);
    }
}
