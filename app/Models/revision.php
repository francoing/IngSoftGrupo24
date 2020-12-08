<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class revision
 * @package App\Models
 * @version September 21, 2020, 10:01 pm -03
 *
 * @property string $pie
 * @property integer $defecto_id
 * @property integer $supervisor_id
 * @property integer $linea_id
 */
class revision extends Model
{
    use SoftDeletes;

    public $table = 'revisions';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'pie',
        'defecto_id',
        'supervisor_id',
        'linea_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'pie' => 'string',
        'defecto_id' => 'integer',
        'supervisor_id' => 'integer',
        'linea_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'pie' => 'required',
        'defecto_id' => 'required',
        'supervisor_id' => 'required',
        'linea_id' => 'required'
    ];

    public function Supervisor()
    {
        return $this->belongsTo('App\Models\Login', 'supervisor_id');
       
        
    }

    public function linea()
    {
        return $this->belongsTo('App\Models\Linea_de_produccion', 'linea_id');
       
        
    }
    public function defecto()
    {
        return $this->belongsTo('App\Models\Defecto', 'defecto_id');
       
        
    }



    
}
