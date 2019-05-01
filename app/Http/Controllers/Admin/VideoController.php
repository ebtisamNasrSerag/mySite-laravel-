<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Gallery;

class VideoController extends Controller
{
     /**
    *display Gallery view
    *
    */
    public function Gallery()
    {
        $galleries = Gallery::where('type',1)->get();

        return view('admin.admin_pages.video',compact('galleries'));
    } 
    
    /**
    *display modal gallery view
    *
    */
    public function gallery_modal()
    {
    	
        $json['target']  = 'add-video';
        $json['heading'] = 'Add New Video';
        $json['action']  = 'video/add';
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
              'url'     => 'required'

        ]);
        if ($validator->fails()) {    

            $json['errors'] = implode('<br>',$validator->errors()->all());
            
        } else{ 
            $gallery = new Gallery;
            
            $gallery->name_ar = $request->get('name_ar');
            $gallery->name_en = $request->get('name_en');
            $gallery->url = $request->get('url');
            $gallery->type = 1;

            
            $gallery->save();
            $json['success'] = "Video Added successfully";
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
        $json['heading'] = 'Edit Video';
        $json['action']  = 'video/update';
        
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
              'url'   => 'required'

        ]);
        if ($validator->fails()) {    

            $json['errors'] = implode('<br>',$validator->errors()->all());
            
        } else{ 
            $id = $request->get('id');
            $gallery = gallery::find($id);
            
            $gallery->name_ar = $request['name_ar'];
            $gallery->name_en = $request['name_en'];
            $gallery->url = $request['url'];
            $gallery->type = 1;
            
            
            $gallery->save();
            $json['success'] = "Video Updated successfully";
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
        return redirect()->back()->with('message', 'Video deleted');
    }
}
