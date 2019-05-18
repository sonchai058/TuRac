<?php

namespace App\Repositories;

use App\Models\Dog;
use App\Repositories\BaseRepository;

/**
 * Class DogRepository
 * @package App\Repositories
 * @version May 18, 2019, 2:18 pm +07
*/

class DogRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'dog_name'
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
        return Dog::class;
    }
}
