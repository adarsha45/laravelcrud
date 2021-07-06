<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 $admin = new User(  [
    'name' =>'admin',
    'email' => 'admin@admin.com',
    
    'role' => 'admin',
    'email_verified_at' => now(),
    'password' => Hash::make('password'),
    'remember_token' => Str::random(10),
]
 );
 $admin->save();
      
    }
}
