<?php

use Illuminate\Database\Seeder;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Supplier::insert([
            'name' => 'Lutfi Wicak',
            'user_id' => 1,
        	'address' => 'Jl. Merak 2 no 82',
        	'phone_number' => '087827261282',
        	'city_id' => 306,
            'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
        ]);
    }
}
