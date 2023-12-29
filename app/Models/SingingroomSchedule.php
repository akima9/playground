<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SingingroomSchedule extends Model
{
    use HasFactory;
    use HasUlids;

    protected $table = 'singingroom_schedules';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
}
