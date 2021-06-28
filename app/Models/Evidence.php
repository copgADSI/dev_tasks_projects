<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Evidence
 *
 * @property $id
 * @property $information
 * @property $evidenceable_id
 * @property $evidenceable_type
 * @property $state_id
 * @property $created_at
 * @property $updated_at
 *
 * @property State $state
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Evidence extends Model
{

  static $rules = [
    'information' => 'required',
    'evidenceable_id' => 'required',
    'evidenceable_type' => 'required',
    'state_id' => 'required',
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['information', 'evidenceable_id', 'evidenceable_type', 'state_id'];


  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function state()
  {
    return $this->hasOne('App\Models\State', 'id', 'state_id');
  }
  //Relación o-m polimórfica
  public function comment()
  {
    return $this->morphMany('App\Models\Comment', 'commentable'); //Recuperar los registros de la relación
  }
  //Relación o-m polimórfica
  public function files()
  {
    return $this->morphMany('App\Models\File', 'fileable'); //Recuperar los registros de la relación
  }
}
