<?php

namespace App\Repositories;

use App\Models\notification;
use App\Repositories\BaseRepository;

/**
 * Class notificationRepository
 * @package App\Repositories
 * @version December 8, 2019, 6:16 pm UTC
*/

class notificationRepository extends BaseRepository
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
        return notification::class;
    }
}
