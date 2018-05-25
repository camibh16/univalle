<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Pedido;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PedidoRepository
 * @package App\Repositories\Admin
 * @version May 18, 2018, 4:02 am UTC
 *
 * @method Pedido findWithoutFail($id, $columns = ['*'])
 * @method Pedido find($id, $columns = ['*'])
 * @method Pedido first($columns = ['*'])
*/
class PedidoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'users_id',
        'productos_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pedido::class;
    }
}
