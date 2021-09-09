<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role; 

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $authorRole = Role::where('name', 'author')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@real.com',
            'password' => bcrypt('admin')
        ]);

        $author = User::create([
            'name' => 'Author',
            'email' => 'author@author.com',
            'password' => bcrypt('author')
        ]);

        $user = User::create([
            'name' => 'User',
            'email' => 'user@author.com',
            'password' => bcrypt('user')
        ]);

        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);
        
        factory(App\User::class, 50)->create();
            
    }
}
