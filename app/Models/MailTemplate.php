<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MailTemplates\Models\MailTemplate as SpatieMailTemplate;

class MailTemplate extends SpatieMailTemplate
{
    public function mailType(): BelongsTo
    {
        return $this->belongsTo(MailableType::class);
    }
}
