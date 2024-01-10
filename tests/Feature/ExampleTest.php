<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_hello_route_returns_hello(): void
    {
        $response = $this->get('/addroom');

        //$response->assertSee('Hello Toto'); //Pour vérifier le contenu
        $response->assertSee('<h1>Hello Toto</h1>', false); //Pour vérifier qu'il y a bien un <h1> en plus
    }
}
