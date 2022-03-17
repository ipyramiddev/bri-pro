<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NewinformationsController extends Controller
{
    public function get_informations($lang) {
        $data = DB::table('new_informations')->where('lang_page', $lang)->leftJoin('users', 'new_informations.user_id', '=', 'users.id')->select('new_informations.*', 'users.name', 'users.email')->get();
        return response()->json($data);
    }

    public function get_info_detail_data($id) {
        $data = DB::table('new_informations')->where('id', $id)->first();
        return response()->json($data);
    }

    public function new_information_create(Request $request) {
        print_r($request->all());
    }
}
