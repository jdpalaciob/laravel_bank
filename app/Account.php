<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public $timestamps = false;
    protected $fillable = ['account_number', 'account_type_id', 'created', 'active', 'user_id'];
    //account_id->int
    

    public function account_type() 
    {
        return $this->belongsTo('App\AccountType', 'account_type_id', 'id');//->select('id','account_type');
    }
}
