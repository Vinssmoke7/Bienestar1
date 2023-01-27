<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
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
        //
        $user=new User();
        $user->name='Vinsmoke';
        // $user->cedula="1";
        // $user->apellido='Admin';
        // $user->cedula='1';
        $user->email='vinsmoke@admin.com';
        $user->password=Hash::make('Vins123');
        $user->admin=true;
        // $user->admin=true;
        $user->save();

        $user2=new User();
        $user2->name='Admin';
        // $user->cedula="1";
        // $user->apellido='Admin';
        // $user->cedula='1';
        $user2->email='admin@admin.com';
        $user2->password=Hash::make('Admin123');
        $user2->admin=true;
        // $user->admin=true;
        $user2->save();
    }
}
