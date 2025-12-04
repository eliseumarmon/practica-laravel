<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * @property string $title
 * @property string $description
 * @property \Carbon\Carbon $date
 * @property bool $done
 */
class Note extends Model
{
    protected $table = 'notes';
    protected $fillable = ["title", "description", "date", "done"];
    protected $guarded = ["id"];
}
