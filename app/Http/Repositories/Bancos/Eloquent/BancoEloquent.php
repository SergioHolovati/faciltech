<?php
namespace App\Http\Repositories\Bancos\Eloquent;

use App\Http\Repositories\Bancos\Interface\BancoInterface;
use App\Models\Tb_bancos;
use Illuminate\Support\Facades\DB; // this will import the DB facade into your controller class


class BancoEloquent implements BancoInterface{

    private $model;

    public function __construct(Tb_bancos $model){
        $this->model = $model;
    }

    public function get(){
        return $this->model->get();
    }
    public function getById($id){
       return $this->model->find($id);
    }
    public function create($banco){

        $this->model->nome = $banco->nome;
        $this->model->codigo = $banco->codigo;
        $this->model->save();
        return $this->model;
    }
    public function edit($id,$banco){
        $update = $this->model->find($id);
        $update->nome = $banco->nome;
        $update->codigo = $banco->codigo;
        $update->save();
        return $update;
    }
    public function delete($id){
        return $this->model->find($id)->delete();
    }
}