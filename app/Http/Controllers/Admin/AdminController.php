<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function fetch_users() {
        $users = DB::table('users')->select(['id', 'name', 'email', 'phone', 'role', 'permission','created_at'])->get();
        return response()->json($users);
    }
}
