<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@pkt.com',
            'email_verified_at' => date('Y-m-d H:i:s', time()),
            'password' => \bcrypt('1212'),
            'is_admin' => true
        ]);
    }
}
