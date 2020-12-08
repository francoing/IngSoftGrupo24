<?php

namespace App\Repositories;

use App\Models\Turno;
use App\Repositories\BaseRepository;

/**
 * Class TurnoRepository
 * @package App\Repositories
 * @version September 10, 2020, 1:21 am UTC
*/

class TurnoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'horaInicioTurno',
        'horaFinTurno',
        'descripcion'
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
        return Turno::class;
    }
}
