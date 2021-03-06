<?php

/**
 * Customer Provider. Will be loaded before the Customer controller
 * @package App provider
 */

class CustomerProvider extends Customer
{
    // load class aliases 
    public $classAliases = [
        'query' => Centurion\Helpers\Query::class
    ];
    
    /**
     * @method CustomerProvider boot
     * This method would be called before controller renders a view
     * @param $next
     */
    public function boot($next)
    {
        // call view! Applies Globally.
        $next();
    }

    /**
     * @method CustomerProvider onHomeInit
     * This method would be called upon route request to Customer/home
     * @param $next
     */
    public function onHomeInit($next)
    {
        // route passed!
        $next();
    }

    // you can register more init methods for your view models.
}