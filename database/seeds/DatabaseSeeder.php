<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionsSeeder::class);
        $this->call(AlumnoSeeder::class);
        //$this->call(NotasSeeder::class);
        $this->call(CursosSeeder::class);
        $this->call(ProfesorSeeder::class);
    }
}
