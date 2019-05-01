<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Slider;

class SliderController extends Controller
{
        /**
    *display slider view
    *
    */
    public function slider()
    {
        $sliders = Slider::all();

        return view('admin.admin_pages.slider',compact('sliders'));
    } 
    
    /**
    *display modal slider view
    *
    */
    public function slider_modal()
    {
        $json['target'] = 'add-slider';
        $json['heading'] = 'Add New Slider';
        $json['action'] = 'slider/add';
        return response()->json($json); 
    }

    /**
    *add new slider 
    *@param Request $request
    */
    public function slider_add(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
              'title_ar'   => 'required',
              'title_en'   => 'required',
              'details_ar' => 'required',
              'details_en' => 'required',
              'image'      => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        if ($validator->fails()) {    

            $json['errors'] = implode('<br>',$validator->errors()->all());
            
        } else{ 
            $slider = new Slider;
            
            $slider->title_ar = $request->get('title_ar');
            $slider->title_en = $request->get('title_en');
            $slider->details_ar = $request->get('details_ar');
            $slider->details_en = $request->get('details_en');
            if($request->get('show_details') == 'on'){
                $slider->show_details = 1;
            }else{
                $slider->show_details = 0;
            }
            
            if($request->hasFile('image'))
            {
                $image = $request->file('image');
                $name= time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path().'/assets/images/', $name);
                $slider['img'] = $name;
                

            }
            $slider->save();
            $json['success'] = "Slider Added successfully";
        }
        return response()->json($json, 200); 
    }  

    /**
    *edit slider 
    *@param int $id
    */
    public function slider_edit($id)
    {
        $json = Slider::find($id);
        $json['target']  = 'edit-slider-'.$id;
        $json['heading'] = 'Edit Slider';
        $json['action']  = 'slider/update';
        
       return response()->json($json);
    }

    /**
    *update  slider 
    *@param Request $request
    */
    public function slider_update(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
              'title_ar'   => 'required',
              'title_en'   => 'required',
              'details_ar' => 'required',
              'details_en' => 'required',
              'image'      => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        if ($validator->fails()) {    

            $json['errors'] = implode('<br>',$validator->errors()->all());
            
        } else{ 
            $id = $request->get('id');
            $slider = Slider::find($id);
            
            $slider->title_ar = $request['title_ar'];
            $slider->title_en = $request['title_en'];
            $slider->details_ar = $request['details_ar'];
            $slider->details_en = $request['details_en'];
            
            if($request->get('show_details') == 'on'){
                $slider->show_details = 1;
            }else{
                $slider->show_details = 0;
            }
            
            if($request->hasFile('image'))
            {
                $image = $request->file('image');
                $name= time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path().'/assets/images/', $name);
                $slider['img'] = $name;    

            }
            $slider->save();
            $json['success'] = "Slider Updated successfully";
        }
        return response()->json($json); 
    } 

    /**
    *delete slider
    *@param int $id
    */ 
    public function slider_delete($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        return redirect()->back()->with('message', 'Slider deleted');
    }

}
