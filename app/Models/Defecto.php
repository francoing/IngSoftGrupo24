<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Defecto
 * @package App\Models
 * @version September 10, 2020, 12:24 am UTC
 *
 * @property string $nombreDefecto
 */
class Defecto extends Model
{
    use SoftDeletes;

    public $table = 'defectos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombreDefecto',
        'descripcion'
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombreDefecto' => 'string',
        'descripcion'=>'string'

    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombreDefecto' => 'required'
    ];

    
}
