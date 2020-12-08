<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Turno
 * @package App\Models
 * @version September 10, 2020, 1:21 am UTC
 *
 * @property string $horaInicioTurno
 * @property string $horaFinTurno
 * @property string $descripcion
 */
class Turno extends Model
{
    use SoftDeletes;

    public $table = 'turnos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'horaInicioTurno',
        'horaFinTurno',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'horaInicioTurno' => 'string',
        'horaFinTurno' => 'string',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'horaInicioTurno' => 'required',
        'horaFinTurno' => 'required'
    ];

    public function Supervisores()
    {
        return $this->hasMany('App\Models\Supervisor_de_calidad', 'id');
       
        
    }
    
}
