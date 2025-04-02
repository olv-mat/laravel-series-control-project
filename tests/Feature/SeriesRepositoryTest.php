<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\SeriesRepository;

class SeriesRepositoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_if_series_repository_add_insert_series_seasons_and_episodes(): void
    {
        // Arange
        $repository = $this->app->make(SeriesRepository::class);

        // Act
        $repository->add([
            "name" => "Series",
            "seasons" => 1,
            "episodes" => 10,
        ]);

        // Assert
        $this->assertDatabaseHas("series", ["name" => "Series"]);
        $this->assertDatabaseHas("seasons", ["number" => 1]);
        $this->assertDatabaseHas("episodes", ["number" => 1]);
    }
}
