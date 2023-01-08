<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $hidden = ['pivot'];


    public function location()
    {
        return $this->belongsTo(Location::class);
    }


    public function transport()
    {
        return $this->belongsTo(Transport::class);
    }


    public function courier()
    {
        return $this->belongsTo(Courier::class);
    }


    public function process()
    {
        return $this->belongsTo(Process::class);
    }


    public function cargoProcesses()
    {
        return $this->hasMany(CargoProcess::class)
            ->orderBy('id');
    }


    public function specialties()
    {
        return $this->belongsToMany(Specialty::class, 'cargo_specialties')
            ->orderBy('sort_order');
    }
}
