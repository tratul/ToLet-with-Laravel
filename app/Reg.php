<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reg extends Model
{

    protected $table = 'regs';
    protected $primaryKey ='id' ;

    protected $fillable = ['name','username', 'password', 'email', 'mobile', 'usertype'];
}
