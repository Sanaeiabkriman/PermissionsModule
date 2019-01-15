<?php
use Modules\Permission\Database\Seeders\PermissionsTableSeeder;
use Modules\Permission\Database\Seeders\CategoriesTableSeeder;
use Modules\Permission\Database\Seeders\UsersTableSeeder;
use Modules\Factory\Database\Seeders\StatutsTableSeeder;
use Modules\Factory\Database\Seeders\ClientsTableSeeder;

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
        $this->call(PermissionsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(StatutsTableSeeder::class);
        $this->call(ClientsTableSeeder::class);   
    }
}
