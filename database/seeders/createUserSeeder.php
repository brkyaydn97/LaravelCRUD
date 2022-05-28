<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class createUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $user = User::create([
            'name' => 'Gokce Safak',
            'email' => 'gokce@gmail.com',
            'password' => '123',
            'phone' => '123123123',
            'plate' => '06ABC06',
            'tcno' => '12332112332',
            'address' => 'ANKARA',
        ]);
    }
}
