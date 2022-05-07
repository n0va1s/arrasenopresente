<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class AdminPagesTest extends TestCase
{
    /**
     * Test admin page
     *
     * @return void
     */
    public function test_admin_page_200()
    {
        $user = User::factory()->create();
 
        $response = $this->actingAs($user)
                    ->withSession(['banned' => false])
                    ->get('/home');
                    
        $response->assertStatus(200);
    }

    /**
     * Test list page
     *
     * @return void
     */
    public function test_hint_page_200()
    {
        $user = User::factory()->create();
 
        $response = $this->actingAs($user)
                    ->withSession(['banned' => false])
                    ->get('/hint');
                    
        $response->assertStatus(200);
    }

}
