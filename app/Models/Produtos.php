<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Http\Controllers\CategoriaController;

class Produtos extends Model
{
    use HasFactory;

    protected $table = 'produtos';

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }
}
