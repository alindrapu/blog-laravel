<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // protected $fillable = ['name', 'slug'];
    protected $guarded  = ['id'];

    public function city()
    {
        return $this->hasMany(City::class);
    }


}
