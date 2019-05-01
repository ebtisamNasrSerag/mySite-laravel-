<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Service;


class ServiceController extends Controller
{
     /**
    *display service view
    *
    */
    public function service()
    {
        $services = Service::all();

        return view('admin.admin_pages.service',compact('services'));
    } 
    
    /**
    *display modal service view
    *
    */
    public function service_modal()
    {
    	
        $json['target']  = 'add-service';
        $json['heading'] = 'Add New Service';
        $json['action']  = 'service/add';
        return response()->json($json); 
    }

    /**
    *add new service 
    *@param Request $request
    */
    public function service_add(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
              'name_ar' => 'required',
              'name_en' => 'required',
              'desc_ar' => 'required',
              'desc_en' => 'required',
              'image'   => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        if ($validator->fails()) {    

            $json['errors'] = implode('<br>',$validator->errors()->all());
            
        } else{ 
            $service = new Service;
            
            $service->name_ar = $request->get('name_ar');
            $service->name_en = $request->get('name_en');
            $service->desc_ar = $request->get('desc_ar');
            $service->desc_en = $request->get('desc_en');
            
            if($request->hasFile('image'))
            {
                $image = $request->file('image');
                $name= time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path().'/assets/images/', $name);
                $service['img'] = $name;
                

            }
            $service->save();
            $json['success'] = "Service Added successfully";
        }
        return response()->json($json, 200); 
    }  

    /**
    *edit service 
    *@param int $id
    */
    public function service_edit($id)
    {
        $json = Service::find($id);
        $json['target']  = 'edit-service-'.$id;
        $json['heading'] = 'Edit Service';
        $json['action']  = 'service/update';
        
       return response()->json($json);
    }

    /**
    *update  service 
    *@param Request $request
    */
    public function service_update(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
              'name_ar' => 'required',
              'name_en' => 'required',
              'desc_ar' => 'required',
              'desc_en' => 'required',
              'image'   => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        if ($validator->fails()) {    

            $json['errors'] = implode('<br>',$validator->errors()->all());
            
        } else{ 
            $id = $request->get('id');
            $service = Service::find($id);
            
            $service->name_ar = $request['name_ar'];
            $service->name_en = $request['name_en'];
            $service->desc_ar = $request['desc_ar'];
            $service->desc_en = $request['desc_en'];
            
            if($request->hasFile('image'))
            {
                $image = $request->file('image');
                $name= time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path().'/assets/images/', $name);
                $service['img'] = $name;
                

            }
            $service->save();
            $json['success'] = "Service Updated successfully";
        }
        return response()->json($json, 200); 
    } 

    /**
    *delete service
    *@param int $id
    */ 
    public function service_delete($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->back()->with('message', 'service deleted');
    }
}
