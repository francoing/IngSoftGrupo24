<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class inspeccione
 * @package App\Models
 * @version September 20, 2020, 9:08 pm -03
 *
 * @property integer $supervisor_id
 * @property integer $linea_id
 */
class inspeccione extends Model
{
    use SoftDeletes;

    public $table = 'inspecciones';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
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
        'supervisor_id' => 'integer',
        'linea_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'supervisor_id' => 'required',
        'linea_id' => 'required'
    ];

    
}
