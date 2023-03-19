<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Designation;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Teacher extends Model
{
    use HasFactory;
    // protected $fillable = ['user_id','name','email','phone','password','designation','department_id'];
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function department(){
        return $this->belongsTo(Department::class);
    }
    // public function getName(){
    //     return $this->name;
    // }
    // public function setName(){
    //     $this->name = $this->user->name;
    // }
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
