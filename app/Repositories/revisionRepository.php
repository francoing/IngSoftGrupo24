<?php

namespace App\Repositories;

use App\Models\revision;
use App\Repositories\BaseRepository;

/**
 * Class revisionRepository
 * @package App\Repositories
 * @version September 21, 2020, 10:01 pm -03
*/

class revisionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pie',
        'defecto_id',
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
        return revision::class;
    }
}
