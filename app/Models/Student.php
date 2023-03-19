<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function department(){
        return $this->belongsTo(Department::class);
    }
    public function name() : Attribute {
        return Attribute::make(
            get : fn($value)=>$this->user->name,
        );
    }
    public function email() : Attribute {
        return Attribute::make(
            get: fn($value) => $this->user->email
        );
    }
    public function phone(): Attribute {
        return Attribute::make(
            get: fn($value)=>$this->user->phone
        );
    }

}
