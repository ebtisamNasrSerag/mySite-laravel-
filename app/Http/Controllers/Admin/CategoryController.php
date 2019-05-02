<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use App\Category;
use App\Project;


class CategoryController extends Controller
{
        /**
    *display category view
    *
    */
    public function category()
    {
        $categories = Category::all();

        return view('admin.admin_pages.category',compact('categories'));
    } 
    
    /**
    *display modal categroy view
    *
    */
    public function category_modal()
    {
        $json['target']  = 'add-category';
        $json['heading'] = 'Add New Category';
        $json['action']  = 'category/add';
        return response()->json($json); 
    }

    /**
    *add new category 
    *@param Request $request
    */
    public function category_add(Request $request)
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
            $category = new Category;
            
            $category->name_ar = $request->get('name_ar');
            $category->name_en = $request->get('name_en');
            $category->desc_ar = $request->get('desc_ar');
            $category->desc_en = $request->get('desc_en');
            
            if($request->hasFile('image'))
            {
                $image = $request->file('image');
                $name= time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path().'/assets/images/', $name);
                $category['img'] = $name;
                

            }
            $category->save();
            $json['success'] = "Category Added successfully";
        }
        return response()->json($json, 200); 
    }  

    /**
    *edit category 
    *@param int $id
    */
    public function category_edit($id)
    {
        $json = Category::find($id);
        $json['target']  = 'edit-category-'.$id;
        $json['heading'] = 'Edit Category';
        $json['action']  = 'category/update';
        
       return response()->json($json);
    }

    /**
    *update  category 
    *@param Request $request
    */
    public function category_update(Request $request)
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
            $category = Category::find($id);
            
            $category->name_ar = $request['name_ar'];
            $category->name_en = $request['name_en'];
            $category->desc_ar = $request['desc_ar'];
            $category->desc_en = $request['desc_en'];
            
            if($request->hasFile('image'))
            {
                $image = $request->file('image');
                $name= time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path().'/assets/images/', $name);
                $category['img'] = $name;
                

            }
            $category->save();
            $json['success'] = "Category Updated successfully";
        }
        return response()->json($json, 200); 
    } 

    /**
    *delete category
    *@param int $id
    */ 
    public function category_delete($id)
    {
        $category = Category::find($id);
        $projects = Project::where('cat_id',$id)->get();
        
        if($projects->isEmpty())
        {
            $category->delete();
            return redirect()->back()->with('success', 'Category deleted');
        }

        return redirect()->back()->with('error', 'Category dosn\'t Deleted Because it related to projects if you want Plz delete all it\'s projects. ');
    }

}
