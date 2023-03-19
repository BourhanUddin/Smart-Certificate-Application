<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advisor extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
    public function name(): Attribute {
        return Attribute::make(
            get:fn($value)=>$this->teacher->name
        );
    }
}
