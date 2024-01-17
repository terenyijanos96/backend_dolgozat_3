<?php

namespace Tests\Feature;

use Tests\TestCase;


class UpperTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_upper_get(): void
    {
        $response = $this->get('api/uppers/');

        $response->assertStatus(200);
    }

    public function test_upper_post(): void
    {

        $response = $this->post('api/uppers/', ['name' => 'Póló', 'description' => 'Egy fehér póló']);

        $response->assertStatus(200);
    }

    public function test_upper_put(): void
    {

        $response = $this->put('api/uppers/4', ['name' => 'Pulcsi', 'description' => 'Egy kötött pulóver']);

        $response->assertStatus(200);
    }

    public function test_upper_delete(): void
    {

        $response = $this->delete('api/uppers/9');

        $response->assertStatus(200);
    }
}
