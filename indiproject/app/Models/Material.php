<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Material
 * @package App\Models
 * @version May 13, 2020, 10:39 pm UTC
 *
 * @property string material_id
 * @property string material_type
 * @property number quantity
 * @property string supplier
 */
class Material extends Model
{
    use SoftDeletes;

    public $table = 'materials';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'material_id',
        'material_type',
        'quantity',
        'supplier'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'material_id' => 'string',
        'material_type' => 'string',
        'quantity' => 'float',
        'supplier' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'material_id' => 'required',
        'material_type' => 'required',
        'quantity' => 'required',
        'supplier' => 'required'
    ];

    
}
