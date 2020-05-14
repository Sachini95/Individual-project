<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Material_Material_order
 * @package App\Models
 * @version May 13, 2020, 10:42 pm UTC
 *
 * @property string order_id
 * @property string material_id
 * @property string|\Carbon\Carbon supply_date
 * @property string supply_notes
 */
class Material_Material_order extends Model
{
    use SoftDeletes;

    public $table = 'materials_material_orders';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'order_id',
        'material_id',
        'supply_date',
        'supply_notes'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'order_id' => 'string',
        'material_id' => 'string',
        'supply_date' => 'datetime',
        'supply_notes' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'order_id' => 'required',
        'material_id' => 'required',
        'supply_date' => 'required'
    ];

    
}
