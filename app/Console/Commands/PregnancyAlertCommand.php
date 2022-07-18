<?php

namespace App\Console\Commands;

use App\Mail\PregnancyAlertMail;
use App\Models\PregnancyAlert;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class PregnancyAlertCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'alert:pregnancy';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $users = User::with('age_pregnancy')->get();
        $alerts = PregnancyAlert::all()->toArray();

        foreach ($users as $user) {
            if ($user->age_pregnancy) {
                $user->age_week = get_age_of_pregnancy($user->age_pregnancy->pregnancy_start);
                $user->alerts = get_alert_by_weeks($alerts, $user->age_week);

                // alan diganti kalau satu hari bisa dua atau lebih pengingat
                foreach ($user->alerts as $alert) {
                    Mail::to($user)->send(new PregnancyAlertMail($user, $alert));
                }
            }
        }
    }
}
