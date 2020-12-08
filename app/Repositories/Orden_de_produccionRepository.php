<?php

namespace App\Repositories;

use App\Models\Orden_de_produccion;
use App\Repositories\BaseRepository;

/**
 * Class Orden_de_produccionRepository
 * @package App\Repositories
 * @version September 9, 2020, 8:24 pm UTC
*/

class Orden_de_produccionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tiempoInicio',
        'estado',
        'linea_id',
        'numOP'
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
        return Orden_de_produccion::class;
    }
}
