<?php

use Illuminate\Database\Seeder;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('horses')->insert([
            'name' => 'Admin',
            'breed' => 'manga larga',
            'color' => 'preto',
            'fone' => '39662612',
            'email' => 'alazao@hotmail.com',
        ]);

        DB::table('horses')->insert([
            'name' => 'User',
            'breed' => 'friesian',
            'color' => 'branco',
            'fone' => '39663086',
            'email' => 'friesian@hotmail.com',
        ]);
    }
}
