<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function upazilas()
    {
        return $this->hasMany(Upazila::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
