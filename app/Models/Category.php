<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * @property $id
 * @property $category
 * @property $descriptionCategory
 * @property $created_at
 * @property $updated_at
 *
 * @property Categorizable[] $categorizables
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Category extends Model
{

  static $rules = [
    'category' => 'required',
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['category', 'descriptionCategory'];


  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function categorizables()
  {
    return $this->hasMany('App\Models\Categorizable', 'category_id', 'id');
  }

  //R m-m inversa polimórfica
  public function projects()
  {
    return $this->morphToMany('App\Models\Project', 'categorizable');
  }
}
