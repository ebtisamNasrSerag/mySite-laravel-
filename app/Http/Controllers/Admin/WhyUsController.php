<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use App\WhyUs;

class WhyUsController extends Controller
{
    /**
    *display why us view
    *
    */
    public function whyUs()
    {
        $whyus = WhyUs::all();

        return view('admin.admin_pages.whyus',compact('whyus'));
    }

    /**
    *edit why us 
    *@param int $id
    */
    public function whyUs_edit($id)
    {
        $json = WhyUs::find($id);
        $json['target'] = 'edit-whyus-'.$id;
        $json['heading'] = 'Edit Why Us';
        $json['action'] = 'whyus/update';
        
       return response()->json($json);
        
    }

    /**
    *updat why us 
    *@param Request $request
    */
    public function whyUs_update(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
              'title_ar' => 'required',
              'title_en' => 'required',
              'desc_ar' => 'required',
              'desc_en' => 'required',    

        ]);
        if ($validator->fails()) {    

            $json['errors'] = implode('<br>',$validator->errors()->all());
            
        } else{ 
            $id = $request->get('id');
            $why = WhyUs::find($id);
            $why->title_ar = $request->get('title_ar');
            $why->title_en = $request->get('title_en');
            $why->desc_ar = $request->get('desc_ar');
            $why->desc_en = $request->get('desc_en');
            $why->save();
            $json['success'] = "why us updated successfully";
        }
        return response()->json($json, 200); 
    } 

}
