<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Estado;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EstadoRepository
 * @package App\Repositories\Admin
 * @version May 18, 2018, 3:15 am UTC
 *
 * @method Estado findWithoutFail($id, $columns = ['*'])
 * @method Estado find($id, $columns = ['*'])
 * @method Estado first($columns = ['*'])
*/
class EstadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Estado::class;
    }
}
