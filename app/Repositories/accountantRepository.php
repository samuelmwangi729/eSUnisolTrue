<?php

namespace App\Repositories;

use App\Models\accountant;
use App\Repositories\BaseRepository;

/**
 * Class accountantRepository
 * @package App\Repositories
 * @version December 8, 2019, 6:11 pm UTC
*/

class accountantRepository extends BaseRepository
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
        return accountant::class;
    }
}
