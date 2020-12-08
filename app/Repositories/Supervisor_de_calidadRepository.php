<?php

namespace App\Repositories;

use App\Models\Supervisor_de_calidad;
use App\Repositories\BaseRepository;

/**
 * Class Supervisor_de_calidadRepository
 * @package App\Repositories
 * @version September 10, 2020, 2:49 am UTC
*/

class Supervisor_de_calidadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'turno_id',
        'op_id'
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
        return Supervisor_de_calidad::class;
    }
}
