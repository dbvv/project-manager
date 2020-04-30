<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityAction extends Model
{
    protected $fillable = [
        'project_id',
        'task_id',
        'action',
        'linked_entity',
        'linked_entity_id',
        'user_id',
    ];

    public function project()
    {
        return $this->belongsTo('App\Models\Project');
    }

    public function task()
    {
        return $this->belongsTo('App\Models\Task');
    }

    public function actionEntity() {}

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
