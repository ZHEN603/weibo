<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(50)->create();

        $user=User::find(1);
        $user->name='ZHEN603';
        $user->email='a513515732@hotmail.com';
        $user->is_admin=true;
        $user->save();
    }
}
