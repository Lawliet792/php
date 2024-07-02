<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\Bahan;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BahanControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs(
            User::factory()->create(['email' => 'admin@admin.com'])
        );

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_displays_index_view_with_bahans(): void
    {
        $bahans = Bahan::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('bahans.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.bahans.index')
            ->assertViewHas('bahans');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_bahan(): void
    {
        $response = $this->get(route('bahans.create'));

        $response->assertOk()->assertViewIs('app.bahans.create');
    }

    /**
     * @test
     */
    public function it_stores_the_bahan(): void
    {
        $data = Bahan::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('bahans.store'), $data);

        $this->assertDatabaseHas('bahans', $data);

        $bahan = Bahan::latest('id')->first();

        $response->assertRedirect(route('bahans.edit', $bahan));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_bahan(): void
    {
        $bahan = Bahan::factory()->create();

        $response = $this->get(route('bahans.show', $bahan));

        $response
            ->assertOk()
            ->assertViewIs('app.bahans.show')
            ->assertViewHas('bahan');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_bahan(): void
    {
        $bahan = Bahan::factory()->create();

        $response = $this->get(route('bahans.edit', $bahan));

        $response
            ->assertOk()
            ->assertViewIs('app.bahans.edit')
            ->assertViewHas('bahan');
    }

    /**
     * @test
     */
    public function it_updates_the_bahan(): void
    {
        $bahan = Bahan::factory()->create();

        $data = [
            'jenis_bahan' => $this->faker->text(255),
        ];

        $response = $this->put(route('bahans.update', $bahan), $data);

        $data['id'] = $bahan->id;

        $this->assertDatabaseHas('bahans', $data);

        $response->assertRedirect(route('bahans.edit', $bahan));
    }

    /**
     * @test
     */
    public function it_deletes_the_bahan(): void
    {
        $bahan = Bahan::factory()->create();

        $response = $this->delete(route('bahans.destroy', $bahan));

        $response->assertRedirect(route('bahans.index'));

        $this->assertModelMissing($bahan);
    }
}
