<?php

namespace Tests\Feature;

use App\Models\Course;
use App\Models\Image;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ImageTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function test_index_of_image()
    {
        $images = Image::factory()
            ->count(15)
            ->create();

        $route = route('admin.images.index');
        $response = $this->getJson($route)
            ->assertOK()
            ->getOriginalContent();
        $this->assertEquals(10, $response->count());
    }

    public function test_store_image()
    {
        $image = Image::factory()->make();
        $route = route('admin.images.store');
        $this->getJson($route, $image->toArray())->assertOk();
    }

    public function test_show_image()
    {
        Image::factory()->for(Course::factory()->for(User::factory()))->create();
        $route = route('admin.images.store');
        $this->getJson($route)->assertOk()->getOriginalContent();
    }

    public function test_update_image()
    {
        $image = Image::factory()->for(Course::factory()->for(User::factory()))->create();
        $route = route('admin.images.update', $image->id);
        $this->patchJson($route, ['title' => 'hi'])->assertOk();
    }

    public function test_destroy_image()
    {
        $image = Image::factory()->for(Course::factory()->for(User::factory()))->create();
        $route = route('admin.images.destroy', $image->id);
        $this->deleteJson($route)->assertOk();
    }
}
