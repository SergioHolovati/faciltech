<?php

namespace App\Http\Services\Contrato;

use App\Http\Repositories\Contratos\Interface\ContratoInterface;
use Illuminate\Http\Request;

class ContratoService
{

    private $repository;

    public function __construct(ContratoInterface $repository)
    {
        $this->repository = $repository;
    }

    public function get(){
        return $this->repository->get();
    }

    public function getById($id){
        return $this->repository->getById($id);
    }


    public function create(Request $request)
    {
        
        return $this->repository->create($request);
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit($id, Request $request)
    {
        
        return $this->repository->edit($id,$request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
    
        return $this->repository->delete($id);
    }

}
