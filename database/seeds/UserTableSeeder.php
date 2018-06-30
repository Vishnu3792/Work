
<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'name'     => 'Vishnu',
        'username' => 'vishnu',
        'email'    => 'kallecratos@gmail.com',
        'password' => Hash::make('vishnu'),
    ));
}

}
