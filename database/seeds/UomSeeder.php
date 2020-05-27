<?php

use App\Uom;
use Illuminate\Database\Seeder;

class UomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Uom::create(['uom' => 'BAG', 'description' => 'Bag']);
        Uom::create(['uom' => 'EA', 'description' => 'Each']);
    }
}
