<?php
/**
* Created by Claudio Campos.
* User: callcocam@gmail.com, contato@sigasmart.com.br
* https://www.sigasmart.com.br
*/
namespace Tall\Form\Providers;

use Tall\Form\Commands\CreateCommand;
use Tall\Form\Commands\EditCommand;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Livewire\Livewire;
use Tall\Theme\Providers\ThemeServiceProvider;

class FormServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // if (!$this->app->runningInConsole()){
        //     if(!Schema::hasTable('tenants')){
        //         return;
        //     }
        // }
        $this->publishConfig();
        $this->loadConfigs();

        $this->publishViews();

        if ($this->app->runningInConsole()) {
            $this->commands([
                CreateCommand::class,
                EditCommand::class,
            ]);
        }

        if (class_exists(Livewire::class)) {
           
          
        }
        
        include_once __DIR__."/../../helpers.php";

        ThemeServiceProvider::configureDynamicComponent(__DIR__."/../../resources/views/components");

        if(is_dir(resource_path("views/vendor/tall/form/components"))){
            ThemeServiceProvider::configureDynamicComponent(resource_path("views/vendor/tall/form/components"));
        }

    }

    public function register()
    {
        if (!$this->app->runningInConsole()){
            if(!Schema::hasTable('tenants')){
                return;
            }
        }
        
    }

    protected function publishViews()
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'tall');
        if(is_dir(resource_path('views/vendor/tall/form')))
        {
            $pathViews = resource_path('views/vendor/tall/form');
            $this->loadViewsFrom($pathViews, 'tall');
        }
     
       $this->publishes([__DIR__ . '/../../resources/views' => resource_path('views/vendor/forms')], 'tall');
    }

     /**
     * Publish the config file.
     *
     * @return void
     */
    protected function publishConfig()
    {
        $this->publishes([
            __DIR__.'/../../config/forms.php' => config_path('forms.php'),
        ], 'forms');
    }

    
     /**
     * Merge the config file.
     *
     * @return void
     */
    protected function loadConfigs()
    {
        $this->mergeConfigFrom(__DIR__.'/../../config/forms.php','forms');
    }

}
