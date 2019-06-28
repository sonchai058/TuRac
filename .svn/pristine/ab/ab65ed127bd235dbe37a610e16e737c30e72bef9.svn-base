<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Dog
 * @package App\Models
 * @version May 18, 2019, 2:18 pm +07
 *
 * @property string dog_name
 */
class Dog extends Model
{
    public $incrementing = false;
    public $timestamps = false;
    public $table = 'dogs';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';

    // protected $dates = ['deleted_at'];

    public $fillable = [
        'dog_name',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'dog_name' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        // 'id' => 'required',
        'dog_name' => 'required',
    ];

}
