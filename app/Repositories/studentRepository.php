<?php

namespace App\Repositories;

use App\Models\student;
use App\Repositories\BaseRepository;

/**
 * Class studentRepository
 * @package App\Repositories
 * @version December 8, 2019, 6:19 pm UTC
*/

class studentRepository extends BaseRepository
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
        return student::class;
    }
}
