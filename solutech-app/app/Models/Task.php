<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'status_id',
        'due_date',
    ];

    //relationship with user
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    //relationship with status
    public function status()
    {
        return $this->hasOne(Status::class);
    }
}
