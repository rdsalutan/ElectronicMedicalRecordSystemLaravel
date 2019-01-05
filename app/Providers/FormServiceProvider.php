<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;
class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Form::component('rdsRadio', 'components.form.radio', ['name', 'items' => [] ,'label', 'value' => null, 'attributes' => []]);
        Form::component('rdsSelect', 'components.form.select', ['name', 'items' => [] ,'label', 'value' => null, 'attributes' => []]);
        Form::component('rdsText', 'components.form.text', ['name', 'label', 'value' => null, 'attributes' => []]);
        Form::component('rdsNumber', 'components.form.number', ['name', 'label', 'value' => null, 'attributes' => []]);
        Form::component('rdsDate', 'components.form.date', ['name', 'label', 'value' => null, 'attributes' => []]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
