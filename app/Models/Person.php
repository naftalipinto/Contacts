<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function contacts(){
        return $this->hasMany(Contact::class);
    } 
   
}
