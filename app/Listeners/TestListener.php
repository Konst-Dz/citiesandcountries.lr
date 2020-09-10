<?php

namespace App\Listeners;

use App\Event\TestEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\User;
use App\Showplace;

class TestListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public $user;
    public $showplace;

    public function __construct(User $user,Showplace $showplace)
    {
        $this->user = $user;
        $this->showplace = $showplace;
    }

    /**
     * Handle the event.
     *
     * @param  TestEvent  $event
     * @return void
     */
    public function handle(TestEvent $event)
    {
        //
    }
}
