<?php

namespace App\Repositories;

use App\Models\results;
use App\Repositories\BaseRepository;

/**
 * Class resultsRepository
 * @package App\Repositories
 * @version December 8, 2019, 6:18 pm UTC
*/

class resultsRepository extends BaseRepository
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
        return results::class;
    }
}
