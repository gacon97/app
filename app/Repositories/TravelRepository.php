<?php

namespace App\Repositories;

use App\Models\Travel;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TravelRepository
 * @package App\Repositories
 * @version March 15, 2019, 7:28 am UTC
 *
 * @method Travel findWithoutFail($id, $columns = ['*'])
 * @method Travel find($id, $columns = ['*'])
 * @method Travel first($columns = ['*'])
*/
class TravelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'place',
        'feature',
        'category_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Travel::class;
    }
}
