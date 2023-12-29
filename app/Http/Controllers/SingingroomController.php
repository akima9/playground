<?php

namespace App\Http\Controllers;

use App\Models\Singingroom;
use App\Repositories\SingingroomRepository;
use Illuminate\Http\Request;

class SingingroomController extends Controller
{
    protected $singingroomRepository;

    public function __construct(SingingroomRepository $singingroomRepository)
    {
        $this->singingroomRepository = $singingroomRepository;
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
        $resp = $this->singingroomRepository->store($request);
        
        if ($resp) {
            //TODO: singingroom 만들어지면, schedule 만드는 로직 추가
            return redirect()->route('singingrooms.index');
        }

        var_dump($resp);
    }
}
