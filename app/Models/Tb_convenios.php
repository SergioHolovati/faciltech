<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tb_convenios extends Model
{
    use HasFactory;
        
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "id",
        "codigo",
        "convenio",
        "verba",
        "tb_convenio_banco"
    ];
}
