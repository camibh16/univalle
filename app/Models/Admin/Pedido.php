<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pedido
 * @package App\Models\Admin
 * @version May 18, 2018, 4:02 am UTC
 *
 * @property integer users_id
 * @property integer productos_id
 */
class Pedido extends Model
{
    use SoftDeletes;

    public $table = 'pedidos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'users_id',
        'productos_id'
        'estados_id'
        'total'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'users_id' => 'integer',
        'productos_id' => 'integer'
        'estados_id' => 'integer'
        'total' => 'decimal'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];


    public function usuarios()
    {
        return $this->belongsTo(User::class,'users_id');
    }

    public function productos()
    {
        return $this->belongsToMany(Producto::class,'productos_id');
    }


    public function estados()
    {
        return $this->belongsTo(Estado::class,'estados_id');
    }

    // public function obtenerU()
    // {
    //     $users_id = Auth->user()->id;
    // }

    // public function obtenerP()
    // {
    //     $productos_id = Producto::findOrFail($id);
    // }



}
