<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkingTimeTrack extends Model
{
    protected $fillable = [
        'task_id',
        'project_id',
        'notice',
        'start',
        'end',
        'user_id',
        'duration',
    ];

    public function project()
    {
        return $this->belongsTo('App\Models\Project');
    }

    public function task()
    {
        return $this->belongsTo('App\Models\Task');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
