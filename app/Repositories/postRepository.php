<?php

namespace App\Repositories;

use App\Models\post;
use App\Repositories\BaseRepository;

/**
 * Class postRepository
 * @package App\Repositories
 * @version April 24, 2021, 5:56 pm UTC
*/

class postRepository extends BaseRepository
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
        return post::class;
    }
}
