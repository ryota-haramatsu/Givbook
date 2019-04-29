<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User([
            'name' => 'tanaka',
            'email' => 'tanaka@gmail.com',
            'password' => 'tanaka',
            ]);
            $user->save();
    
            // $user = new \App\User([
            // 'name' => 'ryota',
            // 'email' => 'hara@gmail.com',
            // 'password' => 'hara1106',
            // ]);
            // $user->save();
    }
}
