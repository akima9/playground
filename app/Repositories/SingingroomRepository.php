<?php

namespace App\Repositories;

use App\Models\Singingroom;
use App\Repositories\Interfaces\BaseRepositoryInterface;

class SingingroomRepository implements BaseRepositoryInterface
{
    private $model;

    public function __construct(Singingroom $model)
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

    public function store($request)
    {
        $singingroom = new Singingroom();
        $singingroom->name = $request->name;
        $singingroom->room_count = $request->roomCount;
        $singingroom->start_time = $request->startTime;
        $singingroom->end_time = $request->endTime;
        $singingroom->save();
        return $singingroom->id;
    }
}
