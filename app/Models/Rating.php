<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Rating extends Model
{
    //protected $fillable = ['user_id', 'prod_id', 'rating'];//....................................

    use HasFactory;
    public function user(){
return $this->belongsTo(User::class,'user_id');
    }
    public function product() {
        return $this->belongsTo('App\Product','prod_id');
}
}
