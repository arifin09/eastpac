<?php

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
        $this->call([create_rolesandpermission::class]);
        $this->call(SiteConfigsTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(LandingPageContentsTableSeeder::class);
    }
}
