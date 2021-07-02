<?php

namespace App\Providers;
use App\Models\User;
use App\Models\Departamento;
use App\Models\Supervisor;
use App\Models\Empleado;
use App\Policies\DepartamentoPolicy;
use App\Policies\SupervisorPolicy;
use App\Policies\EmpleadoPolicy;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Departamento::class => DepartamentoPolicy::class,
        Supervisor::class => SupervisorPolicy::class,
        Empleado::class => EmpleadoPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
        Gate::define('administrador', function(User $user){
            return $user->tipo == 0;
        });
    }
}
