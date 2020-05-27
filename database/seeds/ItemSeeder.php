<?php

use App\ClassOfSupply;
use App\Item;
use App\Uom;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['cat litter', 'Scoopable kitty litter, 35# bag', 'BAG', 1],
            ['dog food, wet', 'Kirkland Turkey and Pea (red)', 'EA', 1],
            ['dog food, dry', 'Kirkland Salmon and Potato (blue bag)', 'BAG', 1],
        ];

        collect($items)->map(function ($item) {
            $new = Item::create(
                [
                    'name' => $item[0],
                    'description' => $item[1],
                    'uom_id' => Uom::whereUom($item[2])->first()->id,
                    'class_of_supply_id' => ClassOfSupply::whereClass($item[3])->first()->id,
                ]
                );
        });
    }
}
