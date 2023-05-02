<?php
namespace App\Http\Repositories\Convenios\Interface;

use App\Models\Tb_convenios;

interface ConvenioInterface{
    
    public function __construct(Tb_convenios $model);
    public function get();
    public function getById($id);
    public function create($banco);
    public function edit($id,$banco);
    public function delete($id);
}