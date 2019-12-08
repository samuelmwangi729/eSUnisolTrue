<?php

namespace App\Repositories;

use App\Models\fee;
use App\Repositories\BaseRepository;

/**
 * Class feeRepository
 * @package App\Repositories
 * @version December 8, 2019, 6:14 pm UTC
*/

class feeRepository extends BaseRepository
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
        return fee::class;
    }
}
