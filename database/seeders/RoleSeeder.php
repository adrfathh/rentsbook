<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Role::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'admin', 'client'
        ];

        foreach( $data as $value){
            Role::insert([
                'name' => $value,
            ]);
        }

        DB::table('users')->insert([
            [
                'name' => 'tester',
                'email' => 'tester@gmail.com',
                'password' => Hash::make('123456789'),
                'no_hp' => '08**********',
                'address' => 'sax',
                'role_id' => 2
            ],[
                'name' => 'nathan',
                'email' => 'nathan123@gmail.com',
                'password' => Hash::make('123123123'),
                'no_hp' => '08**********',
                'address' => 'Los Angels',
                'role_id' => 1
            ]
        ]);
    }
}
