<?php
namespace App\Http\Repositories\Contratos\Interface;

use App\Models\Tb_contratos;

interface ContratoInterface{
    
    public function __construct(Tb_contratos $model);
    public function get();
    public function getById($id);
    public function create($contrato);
    public function edit($id,$contrato);
    public function delete($id);
}