<?php

namespace Tests\Feature;

use Tests\TestCase;

class CategoryPagesTest extends TestCase
{
    public function testCategoryPages()
    {
        foreach (config('categories') as $category) {
            $response = $this->get($category['route'])->assertSuccessful();
            
            $response->assertViewIs($category['blade'])
                ->assertViewHas('category', $category)
                ->assertSee($category['name']);
        }
    }
}
