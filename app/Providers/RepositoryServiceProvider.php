<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\UserRepository::class, \App\Repositories\UserRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\BannersRepository::class, \App\Repositories\BannersRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\BannerRepository::class, \App\Repositories\BannerRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\TrabalhosRepository::class, \App\Repositories\TrabalhosRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PortifoliosRepository::class, \App\Repositories\PortifoliosRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CategoriaPortifolioRepository::class, \App\Repositories\CategoriaPortifolioRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\DestaqueRepository::class, \App\Repositories\DestaqueRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ProcessoRepository::class, \App\Repositories\ProcessoRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ContatoRepository::class, \App\Repositories\ContatoRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\SiteRepository::class, \App\Repositories\SiteRepositoryEloquent::class);
        //:end-bindings:
    }
}
