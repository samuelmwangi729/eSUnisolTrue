<?php

namespace App\Repositories;

use App\Models\designation;
use App\Repositories\BaseRepository;

/**
 * Class designationRepository
 * @package App\Repositories
 * @version December 8, 2019, 6:13 pm UTC
*/

class designationRepository extends BaseRepository
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
        return designation::class;
    }
}
