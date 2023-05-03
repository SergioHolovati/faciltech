<?php
namespace App\Http\Repositories\Contratos\Eloquent;

use App\Http\Repositories\Contratos\Interface\ContratoInterface;
use App\Models\Tb_contratos;
use DateTime;
use DateTimeZone;
use Illuminate\Support\Facades\DB;

class ContratoEloquent implements ContratoInterface{

    private $model;

    public function __construct(Tb_contratos $model){
        $this->model = $model;
    }

    public function get(){
           return DB::table('tb_contratos')
            ->join('tb_convenio_servicos', 'tb_contratos.convenio_servico', '=', 'tb_convenio_servicos.id')
            ->join('tb_convenios', 'tb_convenios.id', '=', 'convenio_id')
            ->join('tb_bancos', 'tb_convenios.convenio_banco', '=', 'tb_bancos.id')
            ->select('tb_bancos.nome', 'tb_convenios.verba', 'tb_contratos.codigo','tb_contratos.data_inclusao','tb_contratos.valor','tb_contratos.prazo')
            ->get();
}
    public function getById($id){
        return DB::table('tb_contratos')
        ->join('tb_convenio_servicos', 'tb_contratos.convenio_servico', '=', 'tb_convenio_servicos.id')
        ->join('tb_convenios', 'tb_convenios.id', '=', 'convenio_id')
        ->join('tb_bancos', 'tb_convenios.convenio_banco', '=', 'tb_bancos.id')
        ->where('tb_contratos.id', $id)
        ->select('tb_bancos.nome', 'tb_convenios.verba', 'tb_contratos.codigo','tb_contratos.data_inclusao','tb_contratos.valor','tb_contratos.prazo')
        ->get();

    }
    public function create($contrato){
        $Now = new DateTime('now', new DateTimeZone('Asia/Taipei'));
        $Now->format('Y-m-d H:i:s');
        $this->model->codigo = $contrato->codigo;
        $this->model->prazo = $contrato->prazo;
        $this->model->valor = $contrato->valor;
        $this->model->data_inclusao = $Now;
        $this->model->convenio_servico = intval($contrato->convenio_servico);
        $this->model->save();
        return $this->model;
    }
    public function edit($id,$contrato){
        $update = $this->model->find($id);
        $update->codigo = $contrato->codigo;
        $update->prazo = $contrato->prazo;
        $update->valor = $contrato->valor;
        $update->convenio_servico = intval($contrato->convenio_servico);
        $update->save();
        return $update;
    }
    public function delete($id){
        return $this->model->find($id)->delete();
    }
}