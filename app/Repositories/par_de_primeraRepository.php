<?php

namespace App\Repositories;

use App\Models\par_de_primera;
use App\Repositories\BaseRepository;

/**
 * Class par_de_primeraRepository
 * @package App\Repositories
 * @version September 18, 2020, 1:34 am UTC
*/

class par_de_primeraRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'primera',
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
        return par_de_primera::class;
    }
}
