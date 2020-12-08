<?php

namespace App\Repositories;

use App\Models\Par_de_segunda;
use App\Repositories\BaseRepository;

/**
 * Class Par_de_segundaRepository
 * @package App\Repositories
 * @version September 15, 2020, 12:44 am UTC
*/

class Par_de_segundaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'totalSegunda	integer',
        'linea_id',
        'supervisor_id'
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
        return Par_de_segunda::class;
    }
}
