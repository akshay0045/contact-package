<?php
namespace Akshay\Contact;
use Illuminate\Routing\Route;
use Illuminate\Support\ServiceProvider;
use Session;
class ContactServiceProvider extends ServiceProvider {

    public function boot() {
        //$this->loadRoutes();
        $this->loadRoutesFrom(__DIR__ . "/routes/web.php");
        $this->loadViewsFrom(__DIR__ . "/views",'contact');
        $this->loadMigrationsFrom(__DIR__ ."/database/migrations");

        $this->mergeConfigFrom(
            __DIR__.'/config/contact.php', 'contact'
        );

        $this->publishes([
            __DIR__.'/config/contact.php' => config_path('contact.php'),
        ]);

    }

    public function register() {

    }

     /**
     * Get the router.
     *
     * @return Route
     */
    protected function getRouter()
    {
        return $this->app['router'];
    }

    /**
     * Boot the routes.
     *
     * @return void
     */
    /* protected function loadRoutes()
    {
        $this->getRouter()
             ->middleware('web')
             ->namespace('Akshay\Contact\Http\Controllers')
             ->group(__DIR__ . '/routes/web.php');
    } */

}