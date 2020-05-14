<?php

namespace App\Repositories;

use App\Models\Material_Material_order;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Material_Material_orderRepository
 * @package App\Repositories
 * @version May 13, 2020, 10:42 pm UTC
 *
 * @method Material_Material_order findWithoutFail($id, $columns = ['*'])
 * @method Material_Material_order find($id, $columns = ['*'])
 * @method Material_Material_order first($columns = ['*'])
*/
class Material_Material_orderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'order_id',
        'material_id',
        'supply_date',
        'supply_notes'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Material_Material_order::class;
    }
}
