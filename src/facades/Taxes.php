<?php namespace professionalweb\taxes\facades;

use Illuminate\Support\Facades\Facade;
use professionalweb\taxes\interfaces\TaxFacade;

/**
 * Static proxy for \professionalweb\taxes\facades
 * @package professionalweb\taxes\facades
 */
class Taxes extends Facade
{
    protected static function getFacadeAccessor()
    {
        return TaxFacade::class;
    }
}