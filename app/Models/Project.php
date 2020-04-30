<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'project_parent_id',
        'name',
        'description',
        'owner_id',
    ];

    public function parentProject()
    {
        return $this->belongsTo('App\Models\Project', 'project_parent_id');
    }

    public function childProjects()
    {
        return $this->hasMany('App\Models\Project', 'project_parent_id');
    }

    public function tasks()
    {
        return $this->hasMany('App\Models\Task', 'project_id');
    }


    public function workingTimeTracks()
    {
        return $this->hasMany('App\Models\WorkingTimeTrack');
    }

    public function totalTimeSpent()
    {
    }
}
