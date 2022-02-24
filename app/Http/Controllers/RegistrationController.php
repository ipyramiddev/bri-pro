<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use DB;

class RegistrationController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Customer Registration Function
     */
    public function customerRegister(Request $request) {
        $data = $request->all();
        Validator::make($data, [
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'name' => 'required|max:50',
            'organization' => 'required',
            'deaprtment' => 'required',
            'phone' => 'numeric|required',
            'zip' => 'required',
            'address_1' => 'required',
            'address_2' => 'required',
            'email' => 'required|email:filter|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ])->validate();

        $data['role'] = 'customer';
        $data['permission'] = 'approved';

        $check = User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>bcrypt($data['password']),
            'phone'=>$data['phone'],
            'role'=>$data['role'],
            'permission'=>$data['permission']
        ]);

        if ($check) {
            $lastInsertedID = $check->id;
            $user_permission = $check->permission;
            $keys = array_keys($data);
            foreach($keys as $key){
                if($key != '_token' && $key != "password" && $key != "password_confirmation" && $data[$key] != "" ){
                    DB::table('usermetas')->insert([
                        'user_id'=>$lastInsertedID,
                        'key'=>$key,
                        'value'=>$data[$key],
                    ]);
                }
            }
        }

    }

}
