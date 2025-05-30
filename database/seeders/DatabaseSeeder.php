<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\DefaultGigs;
use Illuminate\Support\Facades\DB;
use Database\Seeders\CountrySeeder;
use Database\Seeders\EmailTemplates;
use Database\Seeders\PackagesSeeder;
use Database\Seeders\DefaultAccounts;
use Database\Seeders\DefaultProjects;
use Database\Seeders\TaxonomiesSeeder;
use Database\Seeders\CountryStatesSeeder;
use Database\Seeders\DefaultSettingSeeder;
use Database\Seeders\DefaultPageSettingSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skillables')->truncate();
        DB::table('languageables')->truncate();
        $this->call([
            CountrySeeder::class,
            PackagesSeeder::class,
            CountryStatesSeeder::class,
            TaxonomiesSeeder::class,
            DefaultSettingSeeder::class,
            DefaultPageSettingSeeder::class,
            DefaultAccounts::class,
            DefaultGigs::class,
            DefaultProjects::class,
            EmailTemplates::class,
        ]);
    }
}
