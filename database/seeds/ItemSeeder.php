<?php

use App\Item;
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
            ['cat litter', 'Scoopable kitty litter, 35# bag'],
            ['dog food, wet', 'Kirkland Turkey and Pea (red)'],
            ['dog food, dry', 'Kirkland Salmon and Potato (blue bag)'],
        ];

        // $flight = Item::create(['name' => 'Flight 10']);

        collect($items)->map(function ($item) {
            $new = Item::create(
                [
                    'name' => $item[0],
                    'description' => $item[1],
                ]
                );
        });
    }
}
