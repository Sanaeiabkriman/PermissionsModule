<?php
use Modules\Permission\Database\Seeders\PermissionsTableSeeder;
use Modules\Permission\Database\Seeders\CategoriesTableSeeder;
use Modules\Permission\Database\Seeders\UsersTableSeeder;

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
        // $this->call(UsersTableSeeder::class);

    }
}
