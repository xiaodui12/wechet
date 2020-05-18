<?php

namespace Ujsoft\Wechat\Providers;

use Illuminate\Support\ServiceProvider;

class WechatPackageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // 加载视图文件
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'admin');
        // 加载migrate文件
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
        // 注册路由
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../../config/wechat.php','uwechat');


    }
}
