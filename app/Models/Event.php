<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'body'
        ];
    
    
    public function Attendance()   
    {
        return $this->belongsToMany(Attendance::class);  
    }
    
    public function groups()   
    {
        return $this->belongsTo(Group::class);  
    }
    
    public function comments()   
    {
        return $this->belongsToMany(Comment::class);  
    }
    
    public function users()   
    {
        return $this->belongsToMany(User::class);  
    }
    
    
}

