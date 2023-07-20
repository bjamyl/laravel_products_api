<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiToken extends Model
{
    use HasFactory;
    protected $table = 'tokens';

    protected $fillable = ['user_id', 'token', 'service', 'price', 'expires_at'];

    //Relationship to user
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
