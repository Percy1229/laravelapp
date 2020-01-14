<?php

namespace App\Providers;

use Validator;
use App\Http\Validators\HelloValidator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
    public function boot()
    {
     
        $validator = $this->app['validator'];
        $validator->resolver(function($translator, $data, $rules, $messages){
        return new HelloValidator($translator, $data, $rules, $messages);
        });
    }
}
