<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RefBuilding extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function ref_floor()
    {
        return $this->belongsTo(RefFloor::class, "building_id");
    }
}
