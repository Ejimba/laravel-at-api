<?php namespace Ejimba\LaravelAtApi\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelAtApi extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'laravel-at-api'; }

}