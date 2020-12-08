<?php

namespace App\Repositories;

use App\Models\Color;
use App\Repositories\BaseRepository;

/**
 * Class ColorRepository
 * @package App\Repositories
 * @version September 9, 2020, 5:18 pm UTC
*/

class ColorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codigo',
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
        return Color::class;
    }
}
