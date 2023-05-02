<?php
namespace App\Http\Repositories\Convenios\Interface;

use App\Models\Tb_convenio_servicos;

interface ConvenioServicoInterface{
    
    public function __construct(Tb_convenio_servicos $model);
    public function get();
    public function getById($id);
    public function create($servicos);
    public function edit($id,$servicos);
    public function delete($id);
}