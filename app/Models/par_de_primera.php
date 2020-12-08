<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class par_de_primera
 * @package App\Models
 * @version September 18, 2020, 1:34 am UTC
 *
 * @property integer $primera
 * @property integer $supervisor_id
 * @property  $linea_id
 * @property  $op_id
 * @property  $modelo_id
 * @property  $color_id
 */
class par_de_primera extends Model
{
    use SoftDeletes;

    public $table = 'par_de_primeras';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'primera',
        'supervisor_id',
        'linea_id',
        'op_id',
        'modelo_id',
        'color_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'primera' => 'integer',
        'supervisor_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'primera' => 'required',
        'supervisor_id' => 'required',
        'linea_id' => 'required',
        'op_id' => 'required',
        'modelo_id' => 'required',
        'color_id' => 'required'
    ];

    
}
