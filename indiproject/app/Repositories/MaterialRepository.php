<?php

namespace App\Repositories;

use App\Models\Material;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MaterialRepository
 * @package App\Repositories
 * @version May 13, 2020, 10:39 pm UTC
 *
 * @method Material findWithoutFail($id, $columns = ['*'])
 * @method Material find($id, $columns = ['*'])
 * @method Material first($columns = ['*'])
*/
class MaterialRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'material_id',
        'material_type',
        'quantity',
        'supplier'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Material::class;
    }
}
