<?php
namespace Database\Seeders;

use AdminsTableSeeder;
use Illuminate\Database\Seeder;
use ModelHasRoleTableSeeder;
use PermissionTableSeeder;
use RoleTableSeeder;
use SettingsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @return void
     */
    public function run()
    {
        $this->call(AdminsTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(ModelHasRoleTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
    }
}
