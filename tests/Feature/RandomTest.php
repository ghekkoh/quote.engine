<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RandomTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDisplayRandomQuote()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        
        $response->assertSee('my favorite quote');
    }
}
