<?php

namespace App\Repositories;

use App\Models\par_hermanado;
use App\Repositories\BaseRepository;

/**
 * Class par_hermanadoRepository
 * @package App\Repositories
 * @version September 16, 2020, 10:15 pm UTC
*/

class par_hermanadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'hermanado',
        'supervisor_id',
        'linea_id',
        'op_id',
        'modelo_id',
        'color_id'
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
        return par_hermanado::class;
    }
}
