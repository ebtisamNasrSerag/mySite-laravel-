<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;

class SettingController extends Controller
{
    /**
    *show setting view
    */
    public function setting()
    {
    	return view('admin.admin_pages.setting');
    }

    /**
    *edit setting data page
    *@param Request $request
    *@return respone
    */
    public function setting_edit(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
              
              'email' => 'required|email',
              'password' => 'required', 

        ]);
        $data = array();
        if ($validator->fails()) {    

            $data['errors'] = $validator->errors()->all();
        } else{    
            
            $id = Auth::user()->id;
            $user = User::find($id);
            
            $user['email'] = $request['email']?:$user['email'];
            $user['password'] = $request['password']?:$user['password'];
            $user['password'] = Hash::make($user['password']);
            
            
            
            
            $user->save();
            $data['success'] = 'Setting data updated Successfully';
            }
        
        return view('admin.admin_pages.setting',compact('data'));
    }
}
