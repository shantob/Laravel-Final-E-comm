<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable =['name','caegory','description','price','image','img_alt','tags'];
    
    public function category()
    {
        return $this->hasOne(Category::class);
    }
}
