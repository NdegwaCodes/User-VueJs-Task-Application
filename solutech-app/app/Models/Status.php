<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
    ];

    // relationship with tasks
    public function tasks()
    {
        return $this->hasOne(Task::class);
    }

}
