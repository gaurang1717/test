<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();

        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $salesRole = Role::where('name', 'sales')->first();
        $purchaseRole = Role::where('name', 'purchase')->first();

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        $sales = User::create([
            'name' => 'Sales',
            'email' => 'sales@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        $purchase = User::create([
            'name' => 'Purchase',
            'email' => 'purchase@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        $admin->roles()->attach($adminRole);
        $sales->roles()->attach($salesRole);
        $purchase->roles()->attach($purchaseRole);
    }
}
