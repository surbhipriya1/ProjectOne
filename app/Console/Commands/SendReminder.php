<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Models\Reminder;
use Illuminate\Support\Facades\Mail;
class SendReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Send:Reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        
        date_default_timezone_set("Asia/Kolkata");
        $time = date("Y-m-d");
        $timeone = date("H:i");
        $finaltime = $time.'T'.$timeone;
        $users = User::all();
        $reminders = Reminder::all();
        foreach($reminders as $reminder)
        {
            if($reminder->date_time ==  $finaltime)
            {    
                foreach($users as $user)
                {    
                    Mail::raw($reminder->description, function ($message) use($user){
                    $message->to($user->email)->subject('Reminder');
                });
                }
            }
        }
    }
}
