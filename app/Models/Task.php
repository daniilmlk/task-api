<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    // Define which attributes are mass assignable
    protected $fillable = [
        'title', 'description', 'user_id',
    ];

    // A task belongs to a user
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

