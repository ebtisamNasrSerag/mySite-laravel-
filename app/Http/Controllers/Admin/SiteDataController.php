<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\SiteData;

class SiteDataController extends Controller
{
    /**
    *show site data page
    */
    public function siteData()
    {
        $site_data = SiteData::first();
        return view('admin.admin_pages.site_data',compact('site_data'));
    }

    /**
    *edit site data page
    *@param Request $request
    *@return respone
    */
    public function siteData_edit(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
              'address_ar' => 'required',
              'address_en' => 'required',
              'email' => 'required|email',
              'phone' => 'required', 

              'facebook' => 'required',    
              'twitter' => 'required',    
              'youtube' => 'required',    
              'insta'   => 'required',

              'about_ar' => 'required',    
              'about_en' => 'required',    
              'logo'     =>  'image|mimes:jpeg,png,jpg|max:2048',
              'lat' => 'required',    
              'lng' => 'required',    


        ]);
        $data = array();
        if ($validator->fails()) {    

            $data['errors'] = $validator->errors()->all();
            $site_data = SiteData::first();
        } else{    
            
            $site_data = SiteData::first();
            $site_data['address_ar'] = $request['address_ar']?:$site_data['address_ar'];
            $site_data['address_en'] = $request['address_en']?:$site_data['address_en'];
            $site_data['email'] = $request['email']?:$site_data['email'];
            $site_data['phone'] = $request['phone']?:$site_data['phone'];

            $site_data['facebook'] = $request['facebook']?:$site_data['facebook'];
            $site_data['twitter'] = $request['twitter']?:$site_data['twitter'];
            $site_data['youtube'] = $request['youtube']?:$site_data['youtube'];
            $site_data['insta'] = $request['insta']?:$site_data['insta'];

            $site_data['about_ar'] = $request['about_ar']?:$site_data['about_ar'];
            $site_data['about_en'] = $request['about_en']?:$site_data['about_en'];
            ;
            $site_data['map_lat'] = $request['lat']?:$site_data['map_lat'];
            $site_data['map_lng'] = $request['lng']?:$site_data['map_lng'];
            
             
            if($request->hasFile('logo'))
            {
                $logo = $request->file('logo');
                $name= time().'.'.$logo->getClientOriginalExtension();
                $logo->move(public_path().'/assets/images/', $name);
                $site_data['logo'] = $name;
                

            }else
            {
               $site_data['logo'] = $site_data['logo'] ;
            }

            
            $site_data->save();
            $data['success'] = 'Site Data updated Successfully';
            }
        
        return view('admin.admin_pages.site_data',compact('data','site_data'));
    }

}
