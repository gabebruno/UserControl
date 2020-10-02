<?php


namespace App\Listeners;


use Tymon\JWTAuth\Providers\Auth\Illuminate;
use Illuminate\Support\Facades\Event;

class UserEventSubscriber extends Event
{
    /**
     * Handle user login events.
     */
    public function fireLogAccess($event)
    {
        // Registra o acesso do usuário logado
        dd($event);
        auth()->user->accessLog();
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param  Illuminate  $events
     */
    public function subscribe($events)
    {
        $events->listen(
            'Illuminate\Auth\Events\Login',
            'App\Listeners\UserEventSubscriber@fireLogAccess'
        );
    }
}
