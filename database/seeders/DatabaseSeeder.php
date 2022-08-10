<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Audit;
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
        Audit::factory(20)->create();

        $this->call([
            MailableTypeSeeder::class,
            MailTemplateSeeder::class
        ]);
    }
}
