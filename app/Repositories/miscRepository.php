<?php

namespace App\Repositories;

use App\Models\misc;
use App\Repositories\BaseRepository;

/**
 * Class miscRepository
 * @package App\Repositories
 * @version December 8, 2019, 6:15 pm UTC
*/

class miscRepository extends BaseRepository
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
        return misc::class;
    }
}
