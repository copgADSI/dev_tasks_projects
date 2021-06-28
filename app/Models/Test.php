<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Test
 *
 * @property $id
 * @property $description
 * @property $startDate
 * @property $deliverDate
 * @property $standbyTime
 * @property $member_id
 * @property $state_id
 * @property $priority_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Member $member
 * @property Priority $priority
 * @property State $state
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Test extends Model
{
    
    static $rules = [
		'description' => 'required',
		'standbyTime' => 'required',
		'member_id' => 'required',
		'state_id' => 'required',
		'priority_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['description','startDate','deliverDate','standbyTime','member_id','state_id','priority_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function member()
    {
        return $this->hasOne('App\Models\Member', 'id', 'member_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function priority()
    {
        return $this->hasOne('App\Models\Priority', 'id', 'priority_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function state()
    {
        return $this->hasOne('App\Models\State', 'id', 'state_id');
    }
    

}
