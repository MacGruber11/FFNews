<?php
/**
 * Created by PhpStorm.
 * User: stepanov
 * Date: 08.08.2016
 * Time: 15:34
 */

namespace MacGruber11\FFNews\Models;

use Illuminate\Database\Eloquent\Model as Model;

class FFNewsCategory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'ffnews_categories';

    protected $fillable = [
        'title', 'slug', 'parent_id', 'note', 'desc'
    ];

}