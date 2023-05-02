<?php
namespace App\Http\Repositories\Convenios\Eloquent;

use App\Http\Repositories\convenios\Interface\ConvenioInterface;
use App\Models\Tb_convenios;
use Illuminate\Support\Facades\DB; // this will import the DB facade into your controller class


class ConvenioEloquent implements ConvenioInterface{

    private $model;

    public function __construct(Tb_convenios $model){
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
        $this->model->verba = floatval($convenio->verba);
        $this->model->convenio = $convenio->convenio;
        $this->model->convenio_banco = $convenio->tb_convenio_banco;
        $this->model->save();
        return $this->model;
    }
    public function edit($id,$convenio){
        $update = $this->model->find($id);

        $update->codigo = $convenio->codigo;
        $update->verba = floatval($convenio->verba);
        $update->convenio = $convenio->convenio;
        $update->convenio_banco = $convenio->tb_convenio_banco;
        $update->save();
        return $update;
    }
    public function delete($id){
        return $this->model->find($id)->delete();
    }
}