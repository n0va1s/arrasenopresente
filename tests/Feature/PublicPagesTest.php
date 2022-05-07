<?php

namespace Tests\Feature;

use Tests\TestCase;

class PublicPagesTest extends TestCase
{
    /**
     * Test home page
     *
     * @return void
     */
    public function test_home_page_200()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * Test done page
     *
     * @return void
     */
    public function test_done_page_200()
    {
        $response = $this->get('/done');

        $response->assertStatus(200);
    }
}
