<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ComentarioTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_comment_creation_with_no_name()
    {
        /** 
         * Testing comment registry with no name
        */
        $response = $this->post(route('comentario.store'), [
            "name" => "",
            "email" => "duson@mailinator.com",
            "body" => "Ratione cumque ipsam",
        ]);
        
        $response->assertStatus(302);

    }
    public function test_comment_creation_with_no_email()
    {
        /** 
         * Testing comment registry with no email
        */
        $response = $this->post(route('comentario.store'), [
            "name" => "Testing comment registry",
            "email" => "",
            "body" => "Ratione cumque ipsam",
        ]);
        
        $response->assertStatus(302);

    }
    public function test_comment_creation_with_no_body()
    {
        /** 
         * Testing comment registry with no body
        */
        $response = $this->post(route('comentario.store'), [
            "name" => "Testing comment registry",
            "email" => 'test@example.com',
            "body" => "",
        ]);
        
        $response->assertStatus(302);

    }

    public function test_comment_creation_with_invalid_name()
    {
        /** 
         * Testing comment registry with invalid name
        */
        $response = $this->post(route('comentario.store'), [
            "name" => 123,
            "email" => 'test@example.com',
            "body" => "teste",
        ]);
        
        $response->assertStatus(302);

    }
    public function test_comment_creation_with_invalid_email()
    {
        /** 
         * Testing comment registry with invalid email
        */
        $response = $this->post(route('comentario.store'), [
            "name" => 'testing',
            "email" => 123,
            "body" => "teste",
        ]);
        
        $response->assertStatus(302);

    }

    public function test_comment_creation_with_invalid_body()
    {
        /** 
         * Testing comment registry with invalid body
        */
        $response = $this->post(route('comentario.store'), [
            "name" => "Testing comment registry",
            "email" => 'test@example.com',
            "body" => 123,
        ]);
        
        $response->assertStatus(302);

    }
}
