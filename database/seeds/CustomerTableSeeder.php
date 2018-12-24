<?php

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Customer::insert([
        	'name' => 'Syarif Hidayat',
        	'address' => 'Jl. Garuda 2 no 712',
        	'phone_number' => '085271251222',
        	'city_id' => 444,
            'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
        ]);
    }
}
