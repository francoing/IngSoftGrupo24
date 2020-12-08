<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class par_hermanado
 * @package App\Models
 * @version September 16, 2020, 10:15 pm UTC
 *
 * @property integer $hermanado
 * @property integer $supervisor_id
 * @property integer $linea_id
 * @property integer $op_id
 * @property integer $modelo_id
 * @property integer $color_id
 */
class par_hermanado extends Model
{
    use SoftDeletes;

    public $table = 'par_hermanados';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'hermanado',
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
        'hermanado' => 'integer',
        'supervisor_id' => 'integer',
        'linea_id' => 'integer',
        'op_id' => 'integer',
        'modelo_id' => 'integer',
        'color_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'hermanado' => 'required',
        'supervisor_id' => 'required',
        'linea_id' => 'required',
        'op_id' => 'required',
        'modelo_id' => 'required',
        'color_id' => 'required'
    ];

    public function Supervisor()
    {
        return $this->belongsTo('App\Models\Login', 'supervisor_id');
       
        
    }

    public function linea()
    {
        return $this->belongsTo('App\Models\Linea_de_produccion', 'linea_id');
       
        
    }

    public function modelo()
    {
        return $this->belongsTo('App\Models\Modelo', 'modelo_id');
       
        
    }
    public function color()
    {
        return $this->belongsTo('App\Models\Color', 'color_id');
       
        
    }


    
}
