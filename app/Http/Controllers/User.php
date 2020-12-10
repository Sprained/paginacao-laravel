<?php

namespace App\Http\Controllers;

use App\Http\Resources\View;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class User extends Controller
{
    public function select()
    {
        return Users::paginate(2);
    }

    public function raw()
    {
        return response()->json(DB::table('users')->select('nome')->paginate(2));
    }

    public function modelResources()
    {
        return response()->json(View::collection(Users::paginate(2)));
    }

    public function rawResources()
    {
        return response()->json(View::collection(DB::table('users')->select('nome')->paginate(2)));
    }
}
