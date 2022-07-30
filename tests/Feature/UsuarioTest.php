<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsuarioTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_creation_with_no_name()
    {
        /** 
         * Testing user registry with invalid nome
        */
        $response = $this->post(route('usuario.store'), [
            "nome" => "",
            "email" => "teste@gmail.com",
            "gender" => "female",
            "status" => "inactive",
        ]);
        
        $response->assertStatus(302);

    }
    public function test_user_creation_with_no_email()
    {
        /** 
         * Testing user registry with invalid email
        */
        $response = $this->post(route('usuario.store'), [
            "nome" => "teste",
            "email" => "",
            "gender" => "female",
            "status" => "inactive",
        ]);
        
        $response->assertStatus(302);

    }
    public function test_user_creation_with_no_gender()
    {
        /** 
         * Testing user registry with invalid gender
        */
        $response = $this->post(route('usuario.store'), [
            "nome" => "teste",
            "email" => "teste@gmail.com",
            "gender" => "",
            "status" => "inactive",
        ]);
        
        $response->assertStatus(302);

    }
    public function test_user_creation_with_no_status()
    {
        /** 
         * Testing user registry with invalid status
        */
        $response = $this->post(route('usuario.store'), [
            "nome" => "teste",
            "email" => "teste@gmail.com",
            "gender" => "male",
            "status" => "",
        ]);
        
        $response->assertStatus(302);

    }
}
