<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Modelo
 * @package App\Models
 * @version September 9, 2020, 6:33 pm UTC
 *
 * @property string $sku
 * @property string $denominacion
 * @property integer $color_id
 */
class Modelo extends Model
{
    use SoftDeletes;

    public $table = 'modelos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'sku',
        'denominacion',
        'color_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sku' => 'string',
        'denominacion' => 'string',
        'color_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'sku' => 'required',
        'denominacion' => 'required',
        'color_id' => 'required'
    ];

    
}
