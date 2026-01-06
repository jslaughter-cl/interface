<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserRole;

class Users extends Authenticatable
{
    UserRole::create(['name' => 'admin']);
    UserRole::create(['name' => 'agent']);

    User::create([
        'name' => 'Admin',
        'email' => '',
        'password' => bcrypt(''),
        'role_id' => 1,
    ]);

    User::create([
        'name' => 'Agent',
        'email' => '',
        'password' => bcrypt(''),
        'role_id' => 1,
        ])
}
