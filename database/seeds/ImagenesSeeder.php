<?php

use Illuminate\Database\Seeder;

class ImagenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Imagenes::class, 300)->create();
    }
}
