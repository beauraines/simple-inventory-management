<?php

use App\ClassOfSupply;
use Illuminate\Database\Seeder;

class ClassOfSupplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classesOfSupply = [
            'Rations - Subsistence',
            'Clothing and Equipment',
            'Petroleum, Oil and Lubricants',
            'Construction Material',
            'Ammunition',
            'Personal Demand Items',
            'Major End Items',
            'Medical Material',
            'Repair Parts',
            'Other Miscelleneous',
        ];

        collect($classesOfSupply)->map(function ($class, $key) {
            ClassOfSupply::create(['class' => $key + 1, 'description' => $class]);
        });
    }
}
