<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Orden_de_produccion
 * @package App\Models
 * @version September 9, 2020, 8:24 pm UTC
 *
 * @property string $tiempoInicio
 * @property string $estado
 * @property integer $linea_id
 */
class Orden_de_produccion extends Model
{
    use SoftDeletes;

    public $table = 'orden_de_produccions';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'tiempoInicio',
        'estado',
        'linea_id',
        'numOP'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tiempoInicio' => 'string',
        'estado' => 'string',
        'linea_id' => 'integer',
        'numOP'=>'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tiempoInicio' => 'required',
        'estado' => 'required',
        'linea_id' => 'required',
        'numOP'=>'required'
    ];

    
}
