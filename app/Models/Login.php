<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Login
 * @package App\Models
 * @version September 12, 2020, 6:51 pm UTC
 *
 * @property string $nombre_completo
 * @property string $correo
 * @property string $contrasena
 * @property string $token
 */
class Login extends Model
{
    use SoftDeletes;

    public $table = 'logins';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre_completo',
        'dni',
        'correo',
        'contrasena',
        'token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre_completo' => 'string',
        'dni' => 'integer',
        'correo' => 'string',
        'contrasena' => 'string',
        'token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre_completo' => 'required',
        'correo' => 'required',
        'contrasena' => 'required'
    ];

    
}
