<?php

namespace App\Repositories;

use App\Models\Activity;
use App\Repositories\BaseRepository;

/**
 * Class ActivityRepository
 * @package App\Repositories
 * @version April 24, 2021, 5:58 pm UTC
*/

class ActivityRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return Activity::class;
    }
}
