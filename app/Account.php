<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = ['account_number', 'account_type', 'created', 'active', 'user_id'];
}
