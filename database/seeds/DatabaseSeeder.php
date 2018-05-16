<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user1=new \App\Admin();
        $user1->name='Super admin';
        $user1->email='superadmin@gmail.com';
        $user1->password=bcrypt(123456);
        $user1->save();
    }
}
