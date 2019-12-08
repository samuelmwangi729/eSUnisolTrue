<?php

namespace App\Repositories;

use App\Models\class;
use App\Repositories\BaseRepository;

/**
 * Class classRepository
 * @package App\Repositories
 * @version December 8, 2019, 6:12 pm UTC
*/

class classRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
        return class::class;
    }
}
