<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

use App\Services\SampleService\SampleServiceService;
use App\Services\SampleService\SampleServiceRepository;

class GrpcServiceProvider extends ServiceProvider
{
    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->bindGrpc(SampleServiceRepository::class, SampleServiceService::class);
    }
}
