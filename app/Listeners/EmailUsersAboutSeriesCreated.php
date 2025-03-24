<?php

namespace App\Listeners;

use App\Mail\SeriesCreated as SeriesCreatedMail;
use App\Events\SeriesCreated as SeriesCreatedEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class EmailUsersAboutSeriesCreated implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SeriesCreatedEvent $event): void
    {
        $email = new SeriesCreatedMail($event->name);
        $when = now()->addSeconds(2);
        Mail::to($event->user)->later($when, $email);
    }
}
