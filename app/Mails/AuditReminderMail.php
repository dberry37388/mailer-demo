<?php

namespace App\Mails;

use App\Models\Audit;
use Spatie\MailTemplates\TemplateMailable;

class AuditReminderMail extends TemplateMailable
{
    /** @var string  */
    public string $name;

    /** @var string */
    public string $auditDueDate;

    public function __construct(Audit $audit)
    {
        $this->name = $audit->name;
        $this->auditDueDate = $audit->audit_last_completed->addYear();
    }
}
