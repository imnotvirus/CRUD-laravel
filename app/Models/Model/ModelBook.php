<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBook extends Model
{
    protected $table = 'books';
    protected $fillable = ['title', 'id_user', 'pages', 'price'];

    public function relUsers()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_user');
    }

    use HasFactory;
}
