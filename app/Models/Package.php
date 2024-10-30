<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'active', 'price', 'image'];

    public function services()
    {
        return $this->belongsToMany(Service::class, 'package_service');
    }
}
