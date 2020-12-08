<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Color
 * @package App\Models
 * @version September 9, 2020, 5:18 pm UTC
 *
 * @property string $codigo
 */
class Color extends Model
{
    use SoftDeletes;

    public $table = 'colors';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'codigo',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'codigo' => 'string',
        'descripcion'=>'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'codigo' => 'required'
    ];

    
}
