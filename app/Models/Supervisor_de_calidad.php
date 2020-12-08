<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Supervisor_de_calidad
 * @package App\Models
 * @version September 10, 2020, 2:49 am UTC
 *
 * @property integer $user_id
 * @property integer $turno_id
 * @property integer $op_id
 */
class Supervisor_de_calidad extends Model
{
    use SoftDeletes;

    public $table = 'supervisor_de_calidads';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'turno_id',
        'op_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'turno_id' => 'integer',
        'op_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'turno_id' => 'required',
        'op_id' => 'required'
    ];

    public function turno()
    {
        return $this->belongsTo('App\Models\Turno', 'turno_id');
    }

    public function usuario()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    
}
