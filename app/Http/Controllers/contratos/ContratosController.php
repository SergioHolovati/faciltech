<?php

namespace App\Http\Controllers\contratos;

use App\Http\Controllers\Controller;
use App\Http\Services\Contrato\ContratoService;
use Illuminate\Http\Request;

class ContratosController extends Controller
{


    private $service;

    public function __construct(ContratoService $service)
    {   
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->service->get();
    }

    public function getById($id)
    {
        return $this->service->getById($id);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return $this->service->create($request);
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit($id,Request $request)
    {
        return $this->service->edit($id,$request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        return $this->service->delete($id);
    }
}
