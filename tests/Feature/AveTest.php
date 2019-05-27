<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Ave;

class AveTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testPageHomeBird()
    {
        //action
        $response = $this->get('/ave');

        //assert
        $response->assertSee('AVISTAMIENTO DE AVES');
        $response->assertStatus(200);
    }

    public function testShowBirdsDetails()
    {
        //action
        $this->get('/ave/10')

        //assert
        ->assertStatus(200)
        ->assertSee('DETALLE DE AVISTAMIENTO');
    }

    public function testCreateBird()
    {
        //arrange
        $ave = factory(Ave::class)->create([
            'ave' => 'gallinazo',
            'cantidad' => '5',
            'lugar_referencia' => 'unas',
            'responsable' => 'curitima'
        ]);

        //action
        $response = $this->get('/ave');

        //assert
        $response->assertSee($ave->ave);
        $response->assertSee('unas');
    }
    
}
