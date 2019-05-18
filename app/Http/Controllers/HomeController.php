<?php

namespace App\Http\Controllers;

use App\Notifications\MyFirstNotification;
use App\User;
use Notification;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::find(1);
        // dd($user->unreadNotifications->markAsRead());
        foreach ($user->unreadNotifications as $notification) {
            // echo "<pre>";
            // print_r($notification->data);
            $notification->markAsRead();
        }
        // dd('sd');
        return view('home');
    }
    public function sendNotification()
    {

        $user = User::first();

        $details = [

            'greeting' => 'Hi Artisan',

            'body' => 'This is my first notification from ItSolutionStuff.com',

            'thanks' => 'Thank you for using ItSolutionStuff.com tuto!',

            'actionText' => 'View My Site',

            'actionURL' => url('/'),

            'order_id' => 101,

        ];

        Notification::send($user, new MyFirstNotification($details));

        dd('done');

    }
}
