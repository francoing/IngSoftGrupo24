<?php

namespace App\Repositories;

use App\Models\inspeccione;
use App\Repositories\BaseRepository;

/**
 * Class inspeccioneRepository
 * @package App\Repositories
 * @version September 20, 2020, 9:08 pm -03
*/

class inspeccioneRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'supervisor_id',
        'linea_id'
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
        return inspeccione::class;
    }
}
