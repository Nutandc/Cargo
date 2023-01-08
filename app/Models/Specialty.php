<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public $timestamps = false;


    public function name()
    {
        if (app()->isLocale('en')) {
            return $this->name_en ?: $this->name;
        } else {
            return $this->name;
        }
    }


    public function cargos()
    {
        return $this->belongsToMany(Cargo::class, 'cargo_specialties')
            ->orderBy('id', 'desc');
    }
}
