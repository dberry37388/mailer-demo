<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    use HasFactory;

    protected $fillable = [
        'company',
        'annual_audit_date',
        'audit_last_completed'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'audit_due_date',
        'audit_last_completed',
    ];
}
