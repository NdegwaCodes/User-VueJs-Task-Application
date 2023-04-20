<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTask extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'task_id',
        'due_date',
        'start_time',
        'end_time',
        'remarks',
        'status_id',
    ];
     //relationship with status
     public function status()
     {
         return $this->hasOne(Status::class);
     }

     //relationship with tasks
     public function tasks()
     {
        return $this->hasMany(Task::class);
     }

     // relationship with users
        public function users()
        {
            return $this->belongsTo(User::class);
        }

 }
 
