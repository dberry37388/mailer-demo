<?php

namespace Database\Seeders;

use App\Mails\AuditPastDueMail;
use App\Mails\AuditReminderMail;
use App\Models\MailableType;
use App\Models\MailTemplate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MailTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MailTemplate::create([
            'mailable_types_id' => MailableType::where('name', 'reminder')->first()->id, // we'd do this differently in real life
            'mailable' => AuditReminderMail::class,
            'subject' => '{{name}} Annual Audit Reminder',
            'html_template' => '<h1>{{name}} Annual Audit Reminder</h1><p>This is a reminder that your annual audit is due on {{ auditDueDate }}</p>',
            'text_template' => 'This is a reminder that your annual audit is due on {{ auditDueDate }}'
        ]);

        MailTemplate::create([
            'mailable_types_id' => MailableType::where('name', 'reminder')->first()->id, // we'd do this differently in real life
            'mailable' => AuditPastDueMail::class,
            'subject' => '{{name}} your Annual Audit is Past Due',
            'html_template' => '<h1>{{name}} Annual Audit Reminder</h1><p>This is a reminder that your annual audit is past due and was due on {{ auditDueDate }}</p>',
            'text_template' => 'This is a reminder that your annual audit is past due and was due on {{ auditDueDate }}'
        ]);
    }
}
