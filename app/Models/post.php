<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;




class post extends Model
{
    use HasFactory;
    protected $fillable=[
    'title',
    'description',
    'user_id',
    ];
public function user(){
     return $this->belongsTo(user::class);  
}
public function postcreator(){
    return $this->belongsTo(user::class,'user_id');  
}
}
