<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Gallery;

class GalleryController extends Controller
{
     /**
    *display Gallery view
    *
    */
    public function Gallery()
    {
        $galleries = Gallery::where('type',0)->get();

        return view('admin.admin_pages.gallery',compact('galleries'));
    } 
    
    /**
    *display modal gallery view
    *
    */
    public function gallery_modal()
    {
    	
        $json['target']  = 'add-gallery';
        $json['heading'] = 'Add New Gallery';
        $json['action']  = 'gallery/add';
        return response()->json($json); 
    }

    /**
    *add new gallery 
    *@param Request $request
    */
    public function gallery_add(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
              'name_ar' => 'required',
              'name_en' => 'required',
              'image'   => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        if ($validator->fails()) {    

            $json['errors'] = implode('<br>',$validator->errors()->all());
            
        } else{ 
            $gallery = new Gallery;
            
            $gallery->name_ar = $request->get('name_ar');
            $gallery->name_en = $request->get('name_en');
            $gallery->type = 0;

            
            if($request->hasFile('image'))
            {
                $image = $request->file('image');
                $name= time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path().'/assets/images/', $name);
                $gallery['url'] = $name;
                

            }
            $gallery->save();
            $json['success'] = "Gallery Added successfully";
        }
        return response()->json($json, 200); 
    }  

    /**
    *edit gallery 
    *@param int $id
    */
    public function gallery_edit($id)
    {
        $json = Gallery::find($id);
        $json['target']  = 'edit-gallery-'.$id;
        $json['heading'] = 'Edit Gallery';
        $json['action']  = 'gallery/update';
        
       return response()->json($json);
    }

    /**
    *update  gallery 
    *@param Request $request
    */
    public function gallery_update(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
              'name_ar' => 'required',
              'name_en' => 'required',
              'image'   => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        if ($validator->fails()) {    

            $json['errors'] = implode('<br>',$validator->errors()->all());
            
        } else{ 
            $id = $request->get('id');
            $gallery = gallery::find($id);
            
            $gallery->name_ar = $request['name_ar'];
            $gallery->name_en = $request['name_en'];
            $gallery->type = 0;
            
            if($request->hasFile('image'))
            {
                $image = $request->file('image');
                $name= time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path().'/assets/images/', $name);
                $gallery['url'] = $name;
                

            }
            $gallery->save();
            $json['success'] = "Gallery Updated successfully";
        }
        return response()->json($json, 200); 
    } 

    /**
    *delete gallery
    *@param int $id
    */ 
    public function gallery_delete($id)
    {
        $gallery = Gallery::find($id);
        $gallery->delete();
        return redirect()->back()->with('message', 'gallery deleted');
    }
}
