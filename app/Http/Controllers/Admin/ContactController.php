<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Contact;

class ContactController extends Controller
{

	 /**
    *display contact view
    *
    */
    public function contact()
    {
        $contacts = Contact::all();

        return view('admin.admin_pages.contact',compact('contacts'));
    } 


    /**
    *delete contact
    *@param int $id
    */ 
    public function contact_delete($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->back()->with('message', 'Contact deleted');
    }
}
