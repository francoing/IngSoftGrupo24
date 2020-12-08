<?php

namespace App\Repositories;

use App\Models\Modelo;
use App\Repositories\BaseRepository;

/**
 * Class ModeloRepository
 * @package App\Repositories
 * @version September 9, 2020, 6:33 pm UTC
*/

class ModeloRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'sku',
        'denominacion',
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
        return Modelo::class;
    }
}
