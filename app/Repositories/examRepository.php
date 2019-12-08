<?php

namespace App\Repositories;

use App\Models\exam;
use App\Repositories\BaseRepository;

/**
 * Class examRepository
 * @package App\Repositories
 * @version December 8, 2019, 6:14 pm UTC
*/

class examRepository extends BaseRepository
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
        return exam::class;
    }
}
