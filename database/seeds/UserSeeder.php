<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\User::class, 3)->create();
        $user = factory(App\User::class)->create([
            'name' => 'Beau Raines',
            'email' => 'beau.raines@gmail.com',
        ]);
    }
}
