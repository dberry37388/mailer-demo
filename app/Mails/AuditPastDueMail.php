<?php

namespace App\Mails;

use App\Models\Audit;
use Spatie\MailTemplates\TemplateMailable;

class AuditPastDueMail extends TemplateMailable
{
    /** @var string  */
    public string $name;

    /** @var string */
    public string $auditDueDate;

    public function __construct(Audit $audit)
    {
        $this->name = $audit->company_name;
        $this->auditDueDate = $audit->audit_last_completed->addYear();
    }
}
