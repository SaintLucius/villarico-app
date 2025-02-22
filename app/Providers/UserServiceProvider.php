<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\UserService;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

        $this->app->singleton(UserService::class, function ($app) {

            $users = [
            [
                'name' => 'John Doe',
                'gender' => 'Male',
                'studno' => '22-00692'

            ],
            
            [
                'name' => 'Anna Doe',
                'gender' => 'Female',
                'studno' => '22-00891'
            ]
        ];

        return new UserService($users);

        });
        //
    }
}
