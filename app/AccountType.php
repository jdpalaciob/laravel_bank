<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountType extends Model
{
    public $timestamps = false;
    public $fillable = ['account_type'];

    public function accounts()
    {
        return $this->hasMany('App\Account', 'account_type_id', 'id');
    } 
    //Groupb by
}
