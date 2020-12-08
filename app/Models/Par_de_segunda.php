<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Par_de_segunda
 * @package App\Models
 * @version September 15, 2020, 12:44 am UTC
 *
 * @property number $totalSegunda	integer
 * @property integer $linea_id
 * @property integer $supervisor_id
 */
class Par_de_segunda extends Model
{
    use SoftDeletes;

    public $table = 'par_de_segundas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'totalSegunda	integer',
        'linea_id',
        'supervisor_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'linea_id' => 'integer',
        'supervisor_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'totalSegunda	integer' => 'required',
        'linea_id' => 'required',
        'supervisor_id' => 'required'
    ];

    public function Supervisor()
    {
        return $this->belongsTo('App\Models\Login', 'supervisor_id');
       
        
    }

    public function linea()
    {
        return $this->belongsTo('App\Models\Linea_de_produccion', 'linea_id');
       
        
    }

    
}
