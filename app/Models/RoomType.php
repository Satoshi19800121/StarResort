<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function type(){
        return $this->belongsTo(Room::class, 'id', 'roomtype_id');
        
    }
}
