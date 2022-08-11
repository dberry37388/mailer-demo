<?php

namespace App\Console\Commands;

use App\Mails\AuditPastDueMail;
use App\Mails\AuditReminderMail;
use App\Models\Audit;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Mail;

class SendAuditReminderMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:send-audit-reminders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to schedule and send out audit reminders.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $audits = Audit::all();

        foreach ($audits as $audit) {
            unset($mailable);
            $daysSinceLastAudit = $audit->audit_last_completed->diffInDays();

            if ($daysSinceLastAudit >= 305 && $daysSinceLastAudit < 365) {
                $mailable = new AuditReminderMail($audit);
            } elseif ($daysSinceLastAudit >= 365) {
                $mailable = new AuditPastDueMail($audit);
            }

            if (isset($mailable)) {
                Mail::to('john@doe.com')->send($mailable);
            }
        }

        return 0;
    }
}
