<?php

namespace App\Repositories;

use App\Models\club;
use App\Repositories\BaseRepository;

/**
 * Class clubRepository
 * @package App\Repositories
 * @version December 8, 2019, 6:13 pm UTC
*/

class clubRepository extends BaseRepository
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
        return club::class;
    }
}
