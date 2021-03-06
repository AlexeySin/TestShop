<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $table = 'mails';

    public function user()
    {
       return $this->belongsTo('App\Models\User');
    }
}
