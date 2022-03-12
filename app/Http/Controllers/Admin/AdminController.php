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

    public function fetch_user_id($id) {
        $user = DB::table('users')->where('id', $id)->first();
        $user = json_decode(json_encode($user), true);
        $usermetas = DB::table('usermetas')-> where('user_id', $id)->get();
        foreach($usermetas as $usermeta) {
            $user[$usermeta->key] = $usermeta->value;
        }
        return response()->json($user);
    }

    public function user_role_update(Request $request, $id) {
        print_r($request->all());
    }
}
