<?php

namespace App\Listeners;

use App\Events\NotifyAdmin;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use App\Notifications\Signup;
use App\User;
use Notification;

class NotifyAdminNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }



    /**
     * Handle the event.
     *
     * @param  NotifyAdmin  $event
     * @return void
     */
    // public function handle(NotifyAdmin $event)
    // {
         
    // }



    public function handle(NotifyAdmin $event)
    {
        // Prepare notification
        $user = $event->user;

        $notification = new Signup($user);

        //Notify Admins
        $admin = new User();

        Notification::send($admin->areAdmins(), $notification);
    }
}
