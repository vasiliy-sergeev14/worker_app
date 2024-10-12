<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = 'positions';
    protected $guarded = false;
    use HasFactory;

    public function workers()
    {
        return $this->hasMany(Worker::Class, 'position_id', 'id');
    }
}
