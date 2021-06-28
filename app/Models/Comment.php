<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 *
 * @property $id
 * @property $comment
 * @property $commentable_id
 * @property $commentable_type
 * @property $member_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Member $member
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Comment extends Model
{

  static $rules = [
    'comment' => 'required',
    'commentable_id' => 'required',
    'commentable_type' => 'required',
    'member_id' => 'required',
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['comment', 'commentable_id', 'commentable_type', 'member_id'];


  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function member()
  {
    return $this->hasOne('App\Models\Member', 'id', 'member_id');
  }

  public function commentable()
  {
    return $this->morphTo(); //Relación polomófica
  }
  //Relación o-m polimórfica
  public function files()
  {
    return $this->morphMany('App\Models\File', 'fileable'); //Recuperar los registros de la relación
  }

  //Relación polimórfica
  /* public function member()
    {
      return $this->belongsTo('App\Models\Member');
    } */
}
