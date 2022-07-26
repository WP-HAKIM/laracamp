<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=(
            [
                'name'=>'admin',
                'email'=>'admin@laracamp.com',
                'email_verified_at'=>date('Y-m-d H:i:s',time()),
                'password'=> \bcrypt('password'),
                'is_admin'=> true,
                'created_at'=>date('Y-m-d H:i:s',time()),
                'updated_at'=>date('Y-m-d H:i:s',time()),
            ]
        );
        User::insert($admin);
    }
}
