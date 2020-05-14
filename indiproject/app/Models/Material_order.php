<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Material_order
 * @package App\Models
 * @version May 13, 2020, 10:41 pm UTC
 *
 * @property string order_id
 * @property string|\Carbon\Carbon order_date
 * @property string project_id
 * @property string project
 * @property string project_supervisor
 * @property string items
 */
class Material_order extends Model
{
    use SoftDeletes;

    public $table = 'material_orders';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'order_id',
        'order_date',
        'project_id',
        'project',
        'project_supervisor',
        'items'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'order_id' => 'string',
        'order_date' => 'datetime',
        'project_id' => 'string',
        'project' => 'string',
        'project_supervisor' => 'string',
        'items' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'order_id' => 'required',
        'order_date' => 'required',
        'project_id' => 'required',
        'project' => 'required',
        'project_supervisor' => 'required',
        'items' => 'required'
    ];

    
}
