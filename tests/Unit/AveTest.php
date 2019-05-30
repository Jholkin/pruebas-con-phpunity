<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Ave;

class AveTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testSaveBird()
    {
        $ave = new Ave();
        $ave->ave = 'gaviota';
        $ave->cantidad = '5';
        $ave->lugar_referencia = 'no se';
        $ave->responsable = 'unas';
        //$ave->save();

        if ($ave->save()) {
            $this->assertTrue(true);
            //dd($ave);
            //$this->assertSee(200);
        }

    }
    

}
