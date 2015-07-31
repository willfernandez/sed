<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['nombres' => 'Juan', 'apellidos' => 'Fernandez', 'cod_alu' => '08108004',
                'password' => Hash::make('123456')],
        ];

        DB::table('users')->insert($users);
    }
}
