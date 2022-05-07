<?php

namespace Tests\Feature;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FlowTest extends TestCase
{
    //use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_gift_save()
    {
        $response = $this->post(
            '/gift/save', 
            [
                'occasion_id' => 1,
                'price_range_id' => 1,
                'theme_id' => 1,
                'good_gift' => 'good gift',
                'bad_gift' => 'bad gift',
                'grecaptcha' => 'gift',
            ]
        );
        //$response->ddHeaders();
        //$response->ddSession();
        //$response->dd();
        $response->assertStatus(302);
        $response->assertRedirectContains('profile');
    }
}
