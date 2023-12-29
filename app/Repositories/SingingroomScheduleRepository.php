<?php

namespace App\Repositories;

use App\Models\SingingroomSchedule;
use App\Repositories\Interfaces\BaseRepositoryInterface;

class SingingroomScheduleRepository implements BaseRepositoryInterface
{
    private $model;

    public function __construct(SingingroomSchedule $model)
    {
        $this->model = $model;
    }

    public function findById($id)
    {
        return $this->model->find($id);
    }

    public function findAll()
    {
        return $this->model->all();
    }

    public function store($singingroom)
    {
        echo $singingroom;
        $singingroomId = $singingroom->id;
        
        $startTime = strtotime($singingroom->start_time);
        $endTime = strtotime($singingroom->end_time);

        // while ($startTime <= strtotime('24:00')) {
        //     var_dump(date('H:i', $startTime));
        //     $startTime += 600;
        // }

        // var_dump($request);
        // $singingroom = new Singingroom();
        // $singingroom->name = $request->name;
        // $singingroom->room_count = $request->roomCount;
        // $singingroom->start_time = $request->startTime;
        // $singingroom->end_time = $request->endTime;
        // return $singingroom->save();
    }
}
