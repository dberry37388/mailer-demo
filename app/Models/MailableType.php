<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MailableType extends Model
{
    use HasFactory;

    public function mailTemplates(): HasMany
    {
        return $this->hasMany(MailTemplate::class);
    }
}
