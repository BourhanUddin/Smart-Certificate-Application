<?php

namespace Tests\Feature;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DepartmentTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_department_url()
    {
        $response = $this->get('/admin/department');

        $response->assertStatus(302);

        $response = $this->actingAs(Admin::first()->user)->get('/admin/dashboard');
        $response->assertStatus(200);
    }
}
