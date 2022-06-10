<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TodolistModel;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    public function getTodos()
    {
        $todos = TodolistModel::all();
        return response()->json($todos);
    }
}
