<?php

namespace App\Repositories;

use App\Models\parent;
use App\Repositories\BaseRepository;

/**
 * Class parentRepository
 * @package App\Repositories
 * @version December 8, 2019, 6:16 pm UTC
*/

class parentRepository extends BaseRepository
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
        return parent::class;
    }
}
