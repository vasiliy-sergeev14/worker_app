<?php

namespace App\Console\Commands;

use App\Models\Position;
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
        $position = Position::find(1);
        dd($position->workers->toArray());
    }

    private function prepareData ()
    {
        $positionData1 = [
            "position_name" => 'developer',
        ];

        $positionData2 = [
            "position_name" => 'manager',
        ];

        $position1 = Position::create($positionData1);
        $position2 = Position::create($positionData2);

        $workerData1 = [
            "name" => "Iban",
            "surname" => "bobuniv",
            "email" => "dsjkfjkS@gmail.com",
            "age" => 25,
            "position_id" => $position1->id,
            "description" => "ssssss",
            "is_married" => true,
        ];

        $workerData2 = [
            "name" => "Iccban",
            "surname" => "fdffff",
            "email" => "dsjkfssss@gmail.com",
            "age" => 744,
            "position_id" => $position2->id,
            "description" => "ssssss",
            "is_married" => false,
        ];

        $workerData3 = [
            "name" => "Vasya",
            "surname" => "Seerr",
            "email" => "dpuffs@gmail.com",
            "age" => 30,
            "position_id" => $position1->id,
            "description" => "ssssss",
            "is_married" => false,
        ];

        $worker1 = Worker::create($workerData1);
        $worker2 = Worker::create($workerData2);
        $worker3 = Worker::create($workerData3);

        $profileData1 = [
            "worker_id" => $worker1->id,
            "city" => 'Boston',
            "skill" => 'pukk',
            "experience" => 55,
            "finished_study" => '1999-06-01',
        ];

        $profileData2 = [
            "worker_id" => $worker2->id,
            "city" => 'ffff',
            "skill" => 'php',
            "experience" => 11,
            "finished_study" => '1999-06-01',
        ];

        $profileData3 = [
            "worker_id" => $worker3->id,
            "city" => 'Boston',
            "skill" => 'boss',
            "experience" => 1,
            "finished_study" => '1999-06-01',
        ];

        $profile1 = Profile::create($profileData1);
        $profile2 = Profile::create($profileData2);
        $profile3 = Profile::create($profileData3);

    }
}
