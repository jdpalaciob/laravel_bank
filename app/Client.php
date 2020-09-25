<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $timestamps = false;
    protected $fillable = ['first_name', 'last_name', 'phone_number', 'email', 'username'];

    public function accounts()
    {
        return $this->hasMany('App\Account', 'client_id', 'id');
    }
}
