<?php
namespace App\Http\Repositories\Convenios\Eloquent;


use App\Http\Repositories\Convenios\Interface\ConvenioServicoInterface;
use App\Models\Tb_convenio_servicos;


class ConvenioServicoEloquent implements ConvenioServicoInterface{

    private $model;

    public function __construct(Tb_convenio_servicos $model){
        $this->model = $model;
    }

    public function get(){
        return $this->model->get();
    }
    public function getById($id){
        return $this->model->find($id);
    }
    public function create($convenio){

        $this->model->codigo = $convenio->codigo;
        $this->model->convenio_id = $convenio->convenio;
        $this->model->servico = $convenio->servico;
        $this->model->save();
        return $this->model;
    }
    public function edit($id,$convenio){
        $update = $this->model->find($id);

        $update->codigo = $convenio->codigo;
        $update->convenio_id = $convenio->convenio;
        $update->servico = $convenio->servico;
        $update->save();
        return $update;
    }
    public function delete($id){
        return $this->model->find($id)->delete();
    }
}