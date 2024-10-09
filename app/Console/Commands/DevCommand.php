<?php

namespace App\Console\Commands;

use App\Models\Profile;
use App\Models\Worker;
use Illuminate\Console\Command;

class DevCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'developer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description developer';

    /**
     * Execute the console command.
     */
    public function handle()
    {
//        $this->prepareData();

//        $profile = Profile::find(1);
//        $worker = Worker::find($profile->worker_id);

//        $worker = Worker::find(5);
//        $profile = Profile::where('worker_id', $worker->id)->first();

        $worker = Worker::find(1);
        $profile = Profile::find(1);

        dd($worker->profile->toArray());
        return 0;
    }

    private function prepareData ()
    {
        $workerData = [
            "name" => "Iban",
            "surname" => "bobuniv",
            "email" => "dsjkfjkS@gmail.com",
            "age" => 25,
            "description" => "ssssss",
            "is_married" => true,
        ];

        $worker = Worker::create($workerData);

        $profileData = [
            "worker_id" => $worker->id,
            "city" => 'Boston',
            "skill" => 'pukk',
            "experience" => 55,
            "finished_study" => '1999-06-01',
        ];

        $profile = Profile::create($profileData);

        dd($profile->toArray());
    }
}
