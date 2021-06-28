<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class File
 *
 * @property $id
 * @property $file
 * @property $fileable_id
 * @property $fileable_type
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class File extends Model
{
    
    static $rules = [
		'file' => 'required',
		'fileable_id' => 'required',
		'fileable_type' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['file','fileable_id','fileable_type'];

    public function fileable()
    {
      return $this->morphTo(); //Relación polomófica
    }

}
