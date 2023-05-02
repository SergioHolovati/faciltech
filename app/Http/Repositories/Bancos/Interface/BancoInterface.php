<?php
namespace App\Http\Repositories\Bancos\Interface;

use App\Models\Tb_bancos;

interface BancoInterface{
    
    public function __construct(Tb_bancos $model);
    public function get();
    public function getById($id);
    public function create($banco);
    public function edit($id,$banco);
    public function delete($id);
}