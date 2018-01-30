<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DevicesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     *
     */

    use DatabaseTransactions;
    use WithoutMiddleware;

    public function testElectronicsHasModel(){
        $electronic = factory( \App\electronics::class)->create();

        $this->assertDatabaseHas('electronics',[
           'machine_type' => $electronic->machine_type,
           'model' => $electronic->model,
           'serial' =>$electronic->serial,
            'voltage' => $electronic->voltage,
            'fault'=> $electronic->fault,
            'status'=>$electronic->status
        ]);
    }
}
