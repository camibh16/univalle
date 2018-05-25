<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Producto
 * @package App\Models\Admin
 * @version May 16, 2018, 5:45 am UTC
 *
 * @property string name
 * @property float precio
 * @property string imagen
 * @property integer empresa_id
 */
class Producto extends Model
{
    use SoftDeletes;

    public $table = 'productos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'precio',
        'imagen',
        'empresa_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'precio' => 'float',
        'imagen' => 'string',
        'empresa_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'precio' => 'required',
        'imagen' => 'required',
        'empresa_id' => 'required'
    ];

    public function Empresa()
    {
        return $this->belongsTo('App\Models\Admin\Empresa','empresa_id');
    }
    
}
