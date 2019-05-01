<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Slider;
use App\SiteData;
use App\Service;
use App\WhyUs;
use App\Project;
use App\Category;
use App\Gallery;
use App\Contact;
use App\Image;

class HomeController extends Controller
{

    /**
     * Show the application home.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $site_data = SiteData::first();
        $sliders = Slider::all();
        $services = Service::all();
        $whyus = WhyUs::all();
        $projects = Project::all();
        return view('pages.home',compact('sliders','site_data','services',
            'whyus','projects'));
    }
    
    /**
    *show about page
    */
    public function about()
    {
        $site_data = SiteData::first();
        return view('pages.about',compact('site_data'));
    }

    /**
    *show services page
    */
    public function services()
    {
        $site_data = SiteData::first();
        $services = Service::all();
        return view('pages.services',compact('services','site_data'));
    }

    /**
    *show service details page
    */
    public function serviceDetails($id)
    {
        $site_data = SiteData::first();
        $service = Service::find($id);
        return view('pages.service_details',compact('service','site_data'));
    }

    /**
    *show projects page
    */
    public function projects()
    {
        $site_data = SiteData::first();
        $projects = Project::all();
        $categories = Category::all();
        return view('pages.projects',compact('projects','site_data','categories'));
    }

    /**
    *show project Details page
    */
    public function projectDetails($id)
    {
        $site_data = SiteData::first();
        $project = Project::find($id);
        $images = Image::where('project_id',$id)->get();
        return view('pages.project_details',compact('project','site_data','images'));
    }

    /**
    *show gallery page
    */
    public function gallery()
    {
        $site_data = SiteData::first();
        $gallery = Gallery::all();
        return view('pages.gallery',compact('gallery','site_data'));
    }

    /**
    *show contact page
    */
    public function contact()
    {
        $site_data = SiteData::first();
        
        return view('pages.contact',compact('site_data'));
    }

    /**
    *add new contact 
    *@param  Request  $Request
    *@return \App\Contact 
    */
    public function addContact(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
              'username' => 'required',
              'email' => 'required|email',
              'phone' => 'required',  
              'message' => 'required',    
        ]);

        if ($validator->fails()) {    

            $json['errors'] = implode('<br>',$validator->errors()->all());
        }else{    
            $message = $request->all(); 
            
            $contact = new Contact;
            $contact->name = $message['username'];
            $contact->email = $message['email'];
            $contact->phone = $message['phone'];
            $contact->msg = $message['message'];
            $contact->save();
            $json['success'] = 'Message sent Successfully';
        }  
        return response()->json($json, 200); 
    }
}


