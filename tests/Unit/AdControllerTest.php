<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Ad;
use Illuminate\Foundation\Testing\RefreshDatabase;


class AdControllerTest extends Testcase
{
    use RefreshDatabase;

    /** @test */
    public function it_displays_ad_details()
    {

        $this->withoutMockingConsoleOutput();

        // Créer une annonce
        $ad = Ad::factory()->create();

        // Appeler la méthode show
        $response = $this->get(route('ad.show', $ad->id));

        // Vérifier que la réponse est correcte
        $response->assertStatus(200);
        $response->assertViewIs('show');
        $response->assertViewHas('ad', $ad);
        $response->assertSee($ad->title);
    }

}
