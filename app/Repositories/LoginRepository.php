<?php

namespace App\Repositories;

use App\Models\Login;
use App\Repositories\BaseRepository;

/**
 * Class LoginRepository
 * @package App\Repositories
 * @version September 12, 2020, 6:51 pm UTC
*/

class LoginRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_completo',
        'dni',
        'correo',
        'contrasena',
        'token'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Login::class;
    }
}
