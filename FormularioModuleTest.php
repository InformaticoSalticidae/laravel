<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormularioModuleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_index_de_formulario() //VIEW CREATE FORMULARIO
    {   
        $this ->withoutexceptionhandling();
        $this->get('/formulario')
             ->assertStatus(200)
             ->assertSee('registro nuevo');
    }

    public function test_show_formulario() //VIEW SHOW FORMULARIO
    {   
    $this ->withoutexceptionhandling();
    $this->get('/formulario/show')
         ->assertStatus(200)
         ->assertSee('todos los registros');
    }

   public function test_edit_de_formulario() //VIEW UPDATE FORMULARIO
   {   
       $this ->withoutexceptionhandling();
       $this->get('/edit_formulario')
            ->assertStatus(200)
            ->assertSee('editando formulario');
   } 

}