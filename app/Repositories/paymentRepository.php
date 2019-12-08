<?php

namespace App\Repositories;

use App\Models\payment;
use App\Repositories\BaseRepository;

/**
 * Class paymentRepository
 * @package App\Repositories
 * @version December 8, 2019, 6:17 pm UTC
*/

class paymentRepository extends BaseRepository
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
        return payment::class;
    }
}
