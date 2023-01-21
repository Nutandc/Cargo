<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
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
        return $this->hasMany(Cargo::class);
    }

    public function parent() // whereNull('parent_id');
    {
        return $this->belongsTo(self::class, 'parent_id');
    }


    public function child() // whereNotNull('parent_id')
    {
        return $this->hasMany(self::class, 'parent_id')
            ->orderBy('sort_order')
            ->orderBy('name');
    }
}
