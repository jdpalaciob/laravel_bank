<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountType extends Model
{
    public $fillable = ['account_type'];

    public function account()
    {
        return $this->hasOne('App\Account');
    }
}
