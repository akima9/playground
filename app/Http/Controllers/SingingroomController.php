<?php

namespace App\Http\Controllers;

use App\Models\Singingroom;
use App\Repositories\SingingroomRepository;
use App\Repositories\SingingroomScheduleRepository;
use Illuminate\Http\Request;

class SingingroomController extends Controller
{
    protected $singingroomRepository;
    protected $singingroomScheduleRepository;

    public function __construct(SingingroomRepository $singingroomRepository, SingingroomScheduleRepository $singingroomScheduleRepository)
    {
        $this->singingroomRepository = $singingroomRepository;
        $this->singingroomScheduleRepository = $singingroomScheduleRepository;
    }

    public function index()
    {
        $singingrooms = $this->singingroomRepository->findAll();
        return view('index', [
            'singingrooms' => $singingrooms
        ]);
    }

    public function show($id)
    {
        $singingroom = $this->singingroomRepository->findById($id);

        return view('singingroom.profile', [
            'singingroom' => $singingroom
        ]);
    }

    public function create()
    {
        return view('admin.singingroom.create');
    }

    public function store(Request $request)
    {
        $singingroomId = $this->singingroomRepository->store($request);
        $singingroom = $this->singingroomRepository->findById($singingroomId);
        //TODO: singingroom 만들어지면, schedule 만드는 로직 추가
        $this->singingroomScheduleRepository->store($singingroom);
    }
}
