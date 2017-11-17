<?php

namespace Emtudo\Units\Auth\Providers;

use Emtudo\Units\Auth\Routes\Api;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'Emtudo\Units\Auth\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Define the routes for the application.
     */
    public function map()
    {
        (new Api([
            'middleware' => ['api'],
            'namespace' => $this->namespace,
            'prefix' => 'auth',
        ]))->register();
    }
}
