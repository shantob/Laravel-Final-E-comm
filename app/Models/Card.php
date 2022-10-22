<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $guarded =[];

    public function products()
    {
        return $this->belongsTo(Product::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
