<?php

namespace App\Console\Commands;

use App\Mail\PregnancyAlertMail;
use App\Models\PregnancyAlert;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Builder;
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
        $maxPregnancyAge = Carbon::now()->subDays(env('MAX_PREGNANCY_AGE') * 7);

        $users = User::with('age_pregnancy')->whereHas('age_pregnancy', function(Builder $query) use ($maxPregnancyAge) {
            $query->where('pregnancy_start', '>=', $maxPregnancyAge->subDays(1));
        })->get();

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
