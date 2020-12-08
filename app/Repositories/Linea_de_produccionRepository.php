<?php

namespace App\Repositories;

use App\Models\Linea_de_produccion;
use App\Repositories\BaseRepository;

/**
 * Class Linea_de_produccionRepository
 * @package App\Repositories
 * @version September 9, 2020, 8:04 pm UTC
*/

class Linea_de_produccionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codigoLinea_de_produccion',
        'modelo_id',
        'ocupacion',
        'asigOP'
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
        return Linea_de_produccion::class;
    }
}
