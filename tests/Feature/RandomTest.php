<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Models\Quote;

class RandomTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDisplayRandomQuote()
    {
        $quote = factory(Quote::class)->create();

        var_dump($quote->toArray());
        
        $response = $this->get('/');

        $response->assertStatus(200);
        
        $response->assertSee($quote->content);
    }
}

