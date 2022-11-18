<?php

namespace Tests\Feature;

use App\Models\Course;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CourseTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function test_index_of_course()
    {
        Course::factory()
            ->for(User::factory())
            ->count(15)
            ->create();

        $route = route('admin.courses.index');
        $response = $this->getJson($route)->getOriginalContent();
        $this->assertEquals(10, $response->count());
    }

    public function test_store_course()
    {
        $course = Course::factory()->for(User::factory())->make();
        $route = route('admin.courses.store');
        $this->getJson($route, $course->toArray())->assertOk();
    }

    public function test_show_course()
    {
        Course::factory()->for(User::factory())->create();
        $route = route('admin.courses.store');
        $this->getJson($route)->assertOk()->getOriginalContent();
    }

    public function test_update_course()
    {
        $course = Course::factory()->for(User::factory())->create();
        $route = route('admin.courses.update', $course->id);
        $this->patchJson($route, ['title' => "hi"])->assertOk();
    }

    public function test_destroy_course()
    {
        $course = Course::factory()->for(User::factory())->create();
        $route = route('admin.courses.destroy', $course->id);
        $this->deleteJson($route)->assertOk();
    }
}
