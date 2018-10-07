<?php namespace professionalweb\taxes;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use professionalweb\taxes\services\TaxFacade;
use professionalweb\taxes\interfaces\TaxFacade as ITaxFacade;

class TaxServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $loader = AliasLoader::getInstance();
        $loader->alias('TaxFacade', TaxFacade::class);
    }

    public function register(): void
    {
        $facade = new TaxFacade();
        $this->app->instance('\TaxFacade', $facade);
        $this->app->instance(ITaxFacade::class, $facade);
    }
}