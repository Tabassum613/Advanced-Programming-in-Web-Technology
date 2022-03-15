<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VendorAuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\VendorAuth::factory()->create([
            'id'=>'1',
            'name' =>'Binti',
            'email'=>'b@gmail.com',
            'number' =>'123456',
            'address'=>'Dhaka',
            'password' =>'12345',
        ]);
    }
}
