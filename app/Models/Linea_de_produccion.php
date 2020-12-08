<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Linea_de_produccion
 * @package App\Models
 * @version September 9, 2020, 8:04 pm UTC
 *
 * @property string $codigoLinea_de_produccion
 * @property integer $modelo_id
 */
class Linea_de_produccion extends Model
{
    use SoftDeletes;

    public $table = 'linea_de_produccions';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'codigoLinea_de_produccion',
        'modelo_id',
        'ocupacion',
        'asigOP'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'codigoLinea_de_produccion' => 'string',
        'modelo_id' => 'integer',
        'ocupacion'=> 'string',
        'asigOP'=> 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'codigoLinea_de_produccion' => 'required',
        'modelo_id' => 'required',
        'ocupacion'=> 'required',
        'asigOP'=> 'required'
    ];

    
}
