<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Datapost extends Model
{
    //
    protected $table = 'dataposts';
    protected $fillable = [
        'title',
        'body'
    ];
}
