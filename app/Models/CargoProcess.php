<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargoProcess extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $dates = [
        'created_at',
    ];

    const UPDATED_AT = null;


    public function cargo()
    {
        return $this->belongsTo(Cargo::class);
    }


    public function process()
    {
        return $this->belongsTo(Process::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
