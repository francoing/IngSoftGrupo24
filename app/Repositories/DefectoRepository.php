<?php

namespace App\Repositories;

use App\Models\Defecto;
use App\Repositories\BaseRepository;

/**
 * Class DefectoRepository
 * @package App\Repositories
 * @version September 10, 2020, 12:24 am UTC
*/

class DefectoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombreDefecto',
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
        return Defecto::class;
    }
}
