<?php

namespace App\Models;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodolistModel extends Model
{
    use HasFactory, Timestamp;
    protected $table = 'tbl_todolists';

    protected $guarded = [];
}
