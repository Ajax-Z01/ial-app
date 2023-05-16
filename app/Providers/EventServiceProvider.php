<?php

namespace App\Providers;

use App\Events\DataDummy;
use App\Listeners\AddDummy;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

use function Illuminate\Events\queueable;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        DataDummy::class => [
            AddDummy::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        Event::listen(
            DataDummy::class,
            [AddDummy::class, 'handle']
        );

        Event::listen(queueable(function (DataDummy $event) {
            $data_dummy = $event->data_dummy;
            $data_dummy->save();
        }));
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
