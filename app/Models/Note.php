<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $title
 * @property string $description
 * @property \Carbon\Carbon $deadline
 * @property bool $done
 */
 
class Note extends Model
{
    protected $table = 'notes';
    protected $fillable = ['title', 'description', 'deadline', 'done'];
    protected $hidden = ['created_at', 'updated_at'];
    protected $guarded = ['id'];
    protected $casts = [
        'deadline' => 'date',
        'done' => 'bool',
    ];
}
