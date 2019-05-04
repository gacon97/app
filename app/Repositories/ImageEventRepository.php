<?php

namespace App\Repositories;

use App\Models\ImageEvent;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ImageEventRepository
 * @package App\Repositories
 * @version May 4, 2019, 2:21 pm UTC
 *
 * @method ImageEvent findWithoutFail($id, $columns = ['*'])
 * @method ImageEvent find($id, $columns = ['*'])
 * @method ImageEvent first($columns = ['*'])
*/
class ImageEventRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'event_id',
        'image'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ImageEvent::class;
    }
}
