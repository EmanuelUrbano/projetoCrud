<?php

use Illuminate\Database\Seeder;
use App\categoria;

class categoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        categoria::create([
            'name'=>'outhers'
        ]);
        categoria::create([
            'name'=>'amplifiers'
        ]);
        categoria::create([
            'name'=>'pedals'
        ]);
        categoria::create([
            'name'=>'cables'
        ]);
        categoria::create([
            'name'=>'intruments'
        ]);
    }
}


/* 
    <label for="amplificadores">Amplificadores</label>
    <input type="radio" id="pedaisEPedaleiras" name="categoriaDoProduto" value="3">
    <label for="pedaisEPedaleiras">Pedais e pedaleiras</label>
    <input type="radio" id="cabos" name="categoriaDoProduto" value="4">
    <label for="cabos">Cabos</label>
    <input type="radio" id="intrumentos" name="categoriaDoProduto" value="5">
    <label for="intrumentos">Instrumentos</label>
    <input type="radio" id="outros" name="categoriaDoProduto" value="1">
    <label for="outros">Outros</label>
*/