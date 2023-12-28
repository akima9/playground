<?php

namespace App\Http\Controllers;

use App\Models\Singingroom;
use Illuminate\Http\Request;

class SingingroomController extends Controller
{
    public function show($id)
    {
        $singingroom = [
            'id' => $id,
            'name' => 'Temp',
            'address' => 'Seoul',
            'roomCount' => 2,
            'startTime' => '12:00',
            'endTime' => '03:00',
            'rooms' => [
                1 => [
                    'reservation' => [
                        '12:05', '12:10'
                    ],
                ],
                2 => [
                    'reservation' => [
                        '18:05', '19:10'
                    ],
                ]
            ]
        ];

        return view('singingroom.profile', [
            'singingroom' => $singingroom
        ]);
    }
}
