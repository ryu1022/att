<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'body'
        ];
    
    public function users()   
    {
        return $this->belongsToMany(User::class, 'group_user');  
    }
    
    
    public function events()
    {
        return $this->hasMany(Event::class);  
    }
    
    public function isMenber($id)
    {
        $users = $this->users->filter(function($user)use($id){
            return $user->id == $id;
        });
    
        if($users->isEmpty()){
                    return false;
                } else {
                    return true;
                }
    }
}
    

