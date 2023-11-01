<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Person;

class Contact extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function person(){
        return $this->belongsTo(Person::class);
    }
    
}
