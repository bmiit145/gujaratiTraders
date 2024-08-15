<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->full_name = 'Gujarati Trader';
        $user->email = 'gujaratitrader@gmail.com';
        $user->phone = '9832493421';
        $user->is_lock = 1;  // 0 means lock, 1 means unlock.
        $user->is_role = 1; // 1 means admin, 2 means user.
        $user->is_delete = 1;
        $user->password = bcrypt('123456');
        $user->save();
    }
}
