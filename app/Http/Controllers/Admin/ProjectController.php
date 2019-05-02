<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Project;
use App\Category;
use App\Image;

class ProjectController extends Controller
{
    /**
    *display project view
    *
    */
    public function project()
    {
        $projects = Project::with('category')->get();

        return view('admin.admin_pages.project',compact('projects'));
    } 
    
    /**
    *display modal project view
    *
    */
    public function project_modal()
    {
    	$categories = Category::all();
        $json['target']  = 'add-project';
        $json['heading'] = 'Add New Project';
        $json['action']  = 'project/add';
        return response()->json(['json' => $json,'categories' => $categories]); 
    }

    

    /**
    *add new project 
    *@param Request $request
    */
    public function project_add(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
              'cat_id' => 'required',
              'name_ar' => 'required',
              'name_en' => 'required',
              'desc_ar' => 'required',
              'desc_en' => 'required',
              'image'   => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        if ($validator->fails()) {    

            $json['errors'] = implode('<br>',$validator->errors()->all());
            
        } else{ 
            $project = new Project;
            
            $project->name_ar = $request->get('name_ar');
            $project->name_en = $request->get('name_en');
            $project->desc_ar = $request->get('desc_ar');
            $project->desc_en = $request->get('desc_en');
            $project->cat_id  = $request->get('cat_id');
            
            if($request->hasFile('image'))
            {
                $image = $request->file('image');
                $name= time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path().'/assets/images/', $name);
                $project['img'] = $name;
                

            }
            $project->save();
            $json['success'] = "Project Added successfully";
        }
        return response()->json($json, 200); 
    } 
    

    /**
    *display modal for add project images view
    *
    */
    public function images($id)
    {
        $project_id = $id;
        $images = Image::where('project_id',$id)->get();
        return view('admin.admin_pages.project_images',compact('project_id','images'));
    }

    /**
    *add project images function
    *@param Request $request
    */ 
    public function images_add(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
              
              'images'   => 'required|array',
              'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        if ($validator->fails()) {    

            $json['errors'] = implode('<br>',$validator->errors()->all());
            
        } 
            
            if($request->hasfile('images'))
             {

                foreach($request->file('images') as $image)
                {
                    $name= time(). uniqid() .'.'.$image->getClientOriginalExtension();
                    $image->move(public_path().'/assets/images/', $name);
                    $product_image = new Image();
                    $product_image->img = $name;
                    $product_image->project_id = $request->get('project_id');
                    $product_image->save();  
                         
                }
                $json['success'] = "Project Images Added successfully";
             }
                
        return response()->json($json, 200);

    }

    /**
    *edit project 
    *@param int $id
    */
    public function project_edit($id)
    {
        $json = Project::find($id);
        $categories = Category::all();
        $json['target']  = 'edit-project-'.$id;
        $json['heading'] = 'Edit Project';
        $json['action']  = 'project/update';
        
       return response()->json(['json'=>$json,'categories'=>$categories]);
    }

    /**
    *update  project 
    *@param Request $request
    */
    public function project_update(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
              'cat_id' => 'required',
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
            $project = Project::find($id);
            
            $project->name_ar = $request['name_ar'];
            $project->name_en = $request['name_en'];
            $project->desc_ar = $request['desc_ar'];
            $project->desc_en = $request['desc_en'];
            $project->cat_id = $request['cat_id'];
            
            if($request->hasFile('image'))
            {
                $image = $request->file('image');
                $name= time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path().'/assets/images/', $name);
                $project['img'] = $name;
                

            }
            $project->save();
            $json['success'] = "Project Updated successfully";
        }
        return response()->json($json, 200); 
    } 

    /**
    *delete project
    *@param int $id
    */ 
    public function project_delete($id)
    {
        $project = Project::find($id);
        $images = Image::where('project_id',$id)->delete();
        $project->delete();
        return redirect()->back()->with('message', 'project deleted');
    }

        /**
    *delete project image
    *@param int $id
    */ 
    public function image_delete($id)
    {
        $image = Image::find($id);
        $image->delete();
        return redirect()->back()->with('message', 'Image deleted');
    }

}
