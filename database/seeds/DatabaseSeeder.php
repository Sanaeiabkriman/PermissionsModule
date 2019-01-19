<?php
use Modules\Permission\Database\Seeders\PermissionsTableSeeder;
use Modules\Permission\Database\Seeders\CategoriesTableSeeder;
use Modules\Permission\Database\Seeders\UsersTableSeeder;
use Modules\Permission\Database\Seeders\RoleTableSeeder;
use Modules\Permission\Database\Seeders\UserRolesTableSeeder;
use Modules\Permission\Database\Seeders\PermissionRolesTableSeeder;
use Modules\Factory\Database\Seeders\StatutsTableSeeder;
use Modules\Factory\Database\Seeders\ClientsTableSeeder;
use Modules\Factory\Database\Seeders\ProjetsTableSeeder;
use Modules\Factory\Database\Seeders\UserProjetTableSeeder;
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
        $this->call(UsersTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UserRolesTableSeeder::class);
        $this->call(PermissionRolesTableSeeder::class);
        $this->call(ProjetsTableSeeder::class);
        $this->call(UserProjetTableSeeder::class);
    }
}
