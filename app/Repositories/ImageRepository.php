<?php

namespace App\Repositories;

use App\Models\Image;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ImageRepository
 * @package App\Repositories
 * @version April 13, 2019, 2:07 pm UTC
 *
 * @method Image findWithoutFail($id, $columns = ['*'])
 * @method Image find($id, $columns = ['*'])
 * @method Image first($columns = ['*'])
*/
class ImageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'travel_id',
        'image'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Image::class;
    }
}
