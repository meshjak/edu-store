<?php

namespace Tests\Feature;

use App\Models\Course;
use App\Models\Episode;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EpisodeTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function test_index_of_episode()
    {
        Episode::factory()
            ->for(Course::factory()->for(User::factory()))
            ->count(15)
            ->create();

        $route = route('admin.episodes.index');
        $response = $this->getJson($route)->getOriginalContent();
        $this->assertEquals(10, $response->count());
    }

    public function test_store_episode()
    {
        $episode = Episode::factory()->for(Course::factory()->for(User::factory()))->make();
        $route = route('admin.episodes.store');
        $this->getJson($route, $episode->toArray())->assertOk();
    }

    public function test_show_episode()
    {
        Episode::factory()->for(Course::factory()->for(User::factory()))->create();
        $route = route('admin.episodes.store');
        $this->getJson($route)->assertOk()->getOriginalContent();
    }

    public function test_update_episode()
    {
        $episode = Episode::factory()->for(Course::factory()->for(User::factory()))->create();
        $route = route('admin.episodes.update', $episode->id);
        $this->patchJson($route, ['title' => 'hi'])->assertOk();
    }

    public function test_destroy_episode()
    {
        $episode = Episode::factory()->for(Course::factory()->for(User::factory()))->create();
        $route = route('admin.episodes.destroy', $episode->id);
        $this->deleteJson($route)->assertOk();
    }
}
