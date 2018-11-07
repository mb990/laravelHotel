<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
   /** @test */
    public function a_default_user_cannot_access_the_admin_section()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->get('/admin')
            ->assertRedirect('home');
    }

    /** @test */
    public function an_admin_can_access_the_admin_section()
    {
        $admin = factory(User::class)
            ->states('admin')
            ->create();

        $this->actingAs($admin)
            ->get('/admin')
            ->assertStatus(200);
    }
}
