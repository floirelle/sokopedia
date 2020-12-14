<?php

use Illuminate\Database\Seeder;
use App\User;
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
        $user->name="Admin";
        $user->role="Admin";
        $user->email="admin@gmail.com";
        $user->password="adminadmin";
        $user->save();

        $user = new User;
        $user->name="Dummy";
        $user->role="User";
        $user->email="dummy@gmail.com";
        $user->password="dummydummy";
        $user->save();

        $user = new User;
        $user->name="Dummy2";
        $user->role="User";
        $user->email="dummy2@gmail.com";
        $user->password="dummydummy";
        $user->save();
    }
}
