<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Roleseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define the roles to be seeded
        $roles = [
            ['role_name' => 'Admin', 'description' => 'admin'],
            ['role_name' => 'Cashier', 'description' => 'kasir'],
            ['role_name' => 'Chef', 'description' => 'koki'],
            ['role_name' => 'Customer', 'description' => 'pelanggan'],

        ];
  
            DB::table('roles')->Insert($roles);
               
        }
    }

