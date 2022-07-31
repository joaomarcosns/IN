<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_post_creation_with_no_titulo()
    {
        /** 
         * Testing post registry with no titulo
        */
        $response = $this->post(route('post.store'), [
            "title" => 7484,
            "user_id" => "4725",
            "body" => "ashdafsdghkjl;"
        ]);
        
        $response->assertStatus(302);
    }

    public function test_post_creation_with_no_body()
    {
        /** 
         * Testing post registry with no body
        */
        $response = $this->post(route('post.store'), [
            "title" => "Teste",
            "user_id" => "4725",
            "body" => 185151
        ]);
        
        $response->assertStatus(302);

    }
}
