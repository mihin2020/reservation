<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class program extends Model
{
    protected $fillable = [
        'jour', 'start_hour', 'end_hour','place'];
}
