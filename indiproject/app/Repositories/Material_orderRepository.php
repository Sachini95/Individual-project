<?php

namespace App\Repositories;

use App\Models\Material_order;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Material_orderRepository
 * @package App\Repositories
 * @version May 13, 2020, 10:41 pm UTC
 *
 * @method Material_order findWithoutFail($id, $columns = ['*'])
 * @method Material_order find($id, $columns = ['*'])
 * @method Material_order first($columns = ['*'])
*/
class Material_orderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'order_id',
        'order_date',
        'project_id',
        'project',
        'project_supervisor',
        'items'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Material_order::class;
    }
}
