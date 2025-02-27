<?php

namespace Tests\Unit\Api\Admin;

use PHPUnit\Framework\TestCase;

class CategoryTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_basic_test(): void
    {
        $this->assertTrue(true);
    }

    public function test_can_store_category()
    {
        $data = [
            'name' => 'Test Category',
        ];

        $response = $this->postJson(route('categories.store'), $data);

        $response->assertStatus(201)
            ->assertJsonFragment(['name' => 'Test Category']);

        $this->assertDatabaseHas('categories', ['name' => 'Test Category']);
    }
}
