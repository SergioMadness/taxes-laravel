<?php namespace professionalweb\taxes;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use professionalweb\taxes\facades\Taxes;
use professionalweb\taxes\services\TaxFacade;
use professionalweb\taxes\interfaces\TaxFacade as ITaxFacade;

class TaxServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $loader = AliasLoader::getInstance();
        $loader->alias('Taxes', Taxes::class);
    }

    public function register(): void
    {
        $this->app->singleton(ITaxFacade::class, TaxFacade::class);
    }
}