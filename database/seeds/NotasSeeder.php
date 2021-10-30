<?php

use App\Notas;
use Illuminate\Database\Seeder;

class NotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Notas::class,20)->create();
    
    }
}
