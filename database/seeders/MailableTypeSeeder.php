<?php

namespace Database\Seeders;

use App\Models\MailableType;
use Illuminate\Database\Seeder;

class MailableTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MailableType::create([
            'name' => 'reminder',
            'description' => 'Mails that are sent out as reminders for specific actions.'
        ]);
    }
}
