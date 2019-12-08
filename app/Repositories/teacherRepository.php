<?php

namespace App\Repositories;

use App\Models\teacher;
use App\Repositories\BaseRepository;

/**
 * Class teacherRepository
 * @package App\Repositories
 * @version December 8, 2019, 6:19 pm UTC
*/

class teacherRepository extends BaseRepository
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
        return teacher::class;
    }
}
