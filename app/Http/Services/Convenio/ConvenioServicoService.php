<?php

namespace App\Http\Services\Convenio;

use App\Http\Repositories\Convenios\Interface\ConvenioServicoInterface;
use Illuminate\Http\Request;

class ConvenioServicoService
{

    private $repository;

    public function __construct(ConvenioServicoInterface $repository)
    {
        $this->repository = $repository;
    }

    public function get(){
        return $this->repository->get();
    }

    public function getById(Request $request){
        return $this->repository->getById($request->id);
    }


        /**
     * Show the form for creating a new resource.
     */
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
