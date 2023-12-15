<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
<<<<<<< HEAD
     *
     * @return void
     */
    public function boot()
=======
     */
    public function boot(): void
>>>>>>> f3520ab17d4629c7c30742bb2f2ecd2b3537f1fe
    {
        Broadcast::routes();

        require base_path('routes/channels.php');
    }
}
