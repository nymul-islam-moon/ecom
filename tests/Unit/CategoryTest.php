<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class CategoryTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_index_returns_categories()
    {
        // Arrange: Mock the CategoryRepository
        $categoryRepositoryMock = Mockery::mock(CategoryRepository::class);
        $this->app->instance(CategoryRepository::class, $categoryRepositoryMock);

        // Mock the data to return
        $categories = Category::factory()->count(3)->make();

        // Mock the repository's get method to return categories
        $categoryRepositoryMock->shouldReceive('get')
            ->with(Mockery::any())
            ->andReturn($categories);

        // Act: Make a request to the controller method
        $request = new Request;
        $controller = new CategoryController($categoryRepositoryMock);

        // Here we call the `index` method
        $response = $controller->index($request);

        // Assert: Check if the response is successful and contains the expected data
        $response->assertStatus(200);
        $response->assertJsonStructure([
            'status',
            'message',
            'data' => [
                '*' => [
                    'id',
                    'name', // Adjust based on your CategoryResource structure
                ],
            ],
        ]);

        $this->assertEquals('Categories fetched successfully', $response->json('message'));
    }
}
