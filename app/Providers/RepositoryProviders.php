<?php

namespace App\Providers;

use App\Http\Repositories\Bancos\Eloquent\BancoEloquent;
use App\Http\Repositories\Bancos\Interface\BancoInterface;
use App\Http\Repositories\Contratos\Eloquent\ContratoEloquent;
use App\Http\Repositories\Contratos\Interface\ContratoInterface;
use App\Http\Repositories\Convenios\Eloquent\ConvenioEloquent;
use App\Http\Repositories\Convenios\Eloquent\ConvenioServicoEloquent;
use App\Http\Repositories\Convenios\Interface\ConvenioInterface;
use App\Http\Repositories\Convenios\Interface\ConvenioServicoInterface;
use Carbon\Laravel\ServiceProvider;

class RepositoryProviders extends ServiceProvider{

    public function register(){
       $this->app->bind(ContratoInterface::class,ContratoEloquent::class);
       $this->app->bind(BancoInterface::class,BancoEloquent::class);
       $this->app->bind(ConvenioInterface::class,ConvenioEloquent::class);
       $this->app->bind(ConvenioServicoInterface::class,ConvenioServicoEloquent::class);
    }

}