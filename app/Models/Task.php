<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'project_id',
        'creator_id',
        'task',
        'task_description',
        'task_parent_id',
        'deadline',
        'task_status_id',
    ];

    public function creator()
    {
        return $this->belongsTo('App\User', 'creator_id');
    }

    public function parentTask()
    {
        return $this->hasMany('App\Models\Task', 'task_parent_id');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\TaskStatus');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
