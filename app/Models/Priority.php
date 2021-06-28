<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Priority
 *
 * @property $id
 * @property $priority
 * @property $descriptionPriority
 * @property $created_at
 * @property $updated_at
 *
 * @property Task[] $tasks
 * @property Test[] $tests
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Priority extends Model
{

    static $rules = [
        'priority' => 'required',
        'descriptionPriority' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['priority', 'descriptionPriority'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasks()
    {
        return $this->hasMany('App\Models\Task', 'priority_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tests()
    {
        return $this->hasMany('App\Models\Test', 'priority_id', 'id');
    }
    public function priorityable()
    {
        return $this->morphTo(); //Relación polomófica
    }
}
