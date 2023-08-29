<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Lancamento;

class CentroCusto extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'centro_custos';
    protected $primaryKey = 'id_centro_custo';
    protected $date = [
        'created_at',
        'update_at',
        'delete_at'
    ];

    protected $fillable = [
        'centro_custo'
    ];

    /**
     * -----------------------------------
     * |        RELACIONAMENTOS         |
     * |                                |
     * -----------------------------------
     */
    public function lancamentos(){
        return $this->belongsTo(
            lancamento::class,
            'id_centro_custo',
            'id_centro_custo'
        );
    }


}
