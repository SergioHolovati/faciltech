<?php

namespace App\Http\Controllers\bancos;

use App\Http\Controllers\Controller;
use App\Http\Services\Banco\BancoService;
use Illuminate\Http\Request;

class BancosController extends Controller
{

    private $service;

    public function __construct(BancoService $service)
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
